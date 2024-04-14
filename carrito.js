document.addEventListener('DOMContentLoaded', () => {
    const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    const tablaCarrito = document.getElementById('tabla-carrito').querySelector('tbody');
    const totalPagar = document.getElementById('total-pagar');
  
    function actualizarCarrito() {
      tablaCarrito.innerHTML = ''; // Limpiar tabla
      let total = 0;
  
      carrito.forEach((producto, index) => {
        const tr = document.createElement('tr');
        const subtotal = Number(producto.precio) * (producto.cantidad || 1);
        tr.innerHTML = `
          <td><img src="${producto.img}" alt="${producto.nombre}" style="width: 50px;"> ${producto.nombre}</td>
          <td>$${producto.precio}</td>
          <td><button onclick="cambiarCantidad(${index}, -1)">-</button> ${producto.cantidad || 1} <button onclick="cambiarCantidad(${index}, 1)">+</button></td>
          <td>$${subtotal}</td>
        `;
        total += subtotal;
        tablaCarrito.appendChild(tr);
      });
  
      totalPagar.textContent = total.toFixed(2);
    }
  
    window.cambiarCantidad = (index, cambio) => {
      const producto = carrito[index];
      const nuevaCantidad = (producto.cantidad || 1) + cambio;
      if (nuevaCantidad > 0) {
        producto.cantidad = nuevaCantidad;
      } else {
        carrito.splice(index, 1); // Eliminar producto si la cantidad es 0
      }
      localStorage.setItem('carrito', JSON.stringify(carrito));
      actualizarCarrito();
    };
  
    actualizarCarrito();
  });
  