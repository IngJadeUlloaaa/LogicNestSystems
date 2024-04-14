document.addEventListener('DOMContentLoaded', () => {
    const carrito = [];
    const carritoContador = document.getElementById('carrito-contador');

    document.querySelectorAll('.btn-agregar').forEach(button => {
        button.addEventListener('click', () => {
            const producto = {
                nombre: button.getAttribute('data-name'),
                precio: button.getAttribute('data-price'),
                img: button.getAttribute('data-img')
            };
            carrito.push(producto);
            actualizarContador();
            // Guardar carrito en localStorage
            localStorage.setItem('carrito', JSON.stringify(carrito));
        });
    });

    function actualizarContador() {
        carritoContador.textContent = `Carrito (${carrito.length})`;
    }

    carritoContador.addEventListener('click', () => {
        window.location.href = 'carrito.html';
    });
});