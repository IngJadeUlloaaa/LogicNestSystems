<?php
// Definir credenciales de la base de datos
$servername = "localhost";
$dbname = "logicnest";
$dbusername = "INGJADE";
$dbpassword = "JADE2023.";

// Conexión con la base de datos
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// ==================================== Register ====================================
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action']) && $_POST['action'] == 'add') {
        // Añadir un nuevo registro a la tabla 'register'
        $stmt = $conn->prepare("INSERT INTO register (name, last_name, address, phone, email, username, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$_POST['name'], $_POST['last_name'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['username'], $_POST['password']]);
    } elseif (isset($_POST['action']) && $_POST['action'] == 'edit') {
        // Actualizar un registro existente en la tabla 'register'
        $stmt = $conn->prepare("UPDATE register SET name=?, last_name=?, address=?, phone=?, email=?, username=?, password=? WHERE id_user=?");
        $stmt->execute([$_POST['name'], $_POST['last_name'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['id_user']]);
    } elseif (isset($_POST['action']) && $_POST['action'] == 'delete') {
        // Eliminar un registro de la tabla 'register'
        $stmt = $conn->prepare("DELETE FROM register WHERE id_user=?");
        $stmt->execute([$_POST['id_user']]);
    }
}

// Leer los registros de la tabla 'register'
$stmt_register = $conn->prepare("SELECT id_user, name, last_name, address, phone, email, username, password FROM register");
$stmt_register->execute();
$result_register = $stmt_register->fetchAll();

// ==================================== Gaming Chair CRUD ==================================== //
// ==================================== Gaming Chair CRUD ==================================== //
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action3']) && $_POST['action3'] == 'add') {
        // Añadir un nuevo registro a la tabla 'gaming_chair'
        $stmt_chair_add = $conn->prepare("INSERT INTO gaming_chair (weight, height, color, fur, price) VALUES (?, ?, ?, ?, ?)");
        $stmt_chair_add->execute([$_POST['weight'], $_POST['height'], $_POST['color'], $_POST['fur'], $_POST['price']]);
    } elseif (isset($_POST['action3']) && $_POST['action3'] == 'edit') {
        // Actualizar un registro existente en la tabla 'gaming_chair'
        $stmt_chair_edit = $conn->prepare("UPDATE gaming_chair SET weight=?, height=?, color=?, fur=?, price=? WHERE id_chair=?");
        $stmt_chair_edit->execute([$_POST['weight'], $_POST['height'], $_POST['color'], $_POST['fur'], $_POST['price'], $_POST['id_chair']]);
    } elseif (isset($_POST['action3']) && $_POST['action3'] == 'delete') {
        // Eliminar un registro de la tabla 'gaming_chair'
        $stmt_chair_delete = $conn->prepare("DELETE FROM gaming_chair WHERE id_chair=?");
        $stmt_chair_delete->execute([$_POST['id_chair']]);
    }
}


// Leer los registros de la tabla 'gaming_chair'
$stmt_chair_read = $conn->prepare("SELECT id_chair, weight, height, color, fur, price FROM gaming_chair");
$stmt_chair_read->execute();
$result_chair = $stmt_chair_read->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Interface</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">



</head>
<body>
    <section class="father-container-register-admin">
        <article class="information-container-register-admin">
            <h2 class="title-admin">LogicNestSystems</h2>
            <ul class="li-container-register-admin">
                <li class="li-register-admin"><a href="#register"><i class="uil uil-user"></i>Register</a></li>
                <li class="li-register-admin"><a href="#gamingPc"><i class="uil uil-inbox"></i>Gaming Pc</a></li>
                <li class="li-register-admin"><a href="#gamingMonitors"><i class="uil uil-desktop"></i>Gaming Monitors</a></li>
                <li class="li-register-admin"><a href="#gamingChairs"><i class="uil uil-wheelchair-alt"></i>Gaming Chairs</a></li>
                <li class="li-register-admin"><a href="#gamingReports"><i class="uil uil-clipboard-alt"></i>Reports</a></li>
                <li class="li-register-admin"><i class="uil uil-signout"></i>Log Out</li>
            </ul>

            <p class="description-container-register-admin">
                <span class="description-register-admin">2024 CopyRights Reserved</span>
                <span class="description-register-admin">Privacy - Terms & Conditions</span>
            </p>
        </article>

        <section class="container-crud-completed">
            <article class="information2-container-register-admin active" id="register">
                <!-- Formulario para añadir/editar -->
                <form class="form-information2-container-register-admin" method="post">
                    <input class="input-form-information2-registr-admin" type="hidden" name="id_user" value="">
                    <input class="input-form-information2-registr-admin" type="hidden" name="action" value="add">
                    <input class="input-form-information2-registr-admin" type="text" name="name" placeholder="Name" required>
                    <input class="input-form-information2-registr-admin" type="text" name="last_name" placeholder="LastName" required>
                    <input class="input-form-information2-registr-admin" type="text" name="address" placeholder="Address" required>
                    <input class="input-form-information2-registr-admin" type="text" name="phone" placeholder="Phone" required>
                    <input class="input-form-information2-registr-admin" type="email" name="email" placeholder="Email" required>
                    <input class="input-form-information2-registr-admin" type="text" name="username" placeholder="User" required>
                    <input class="input-form-information2-registr-admin" type="password" name="password" placeholder="Password" required>
                    <button class="btnSaveIt" type="submit">Guardar</button>
                </form>
                <!-- Tabla de datos -->
                <table class="table-columns-register-admin" border="1">
                    <thead>
                        <tr>
                            <th class="columns-table-register-admin">ID</th>
                            <th class="columns-table-register-admin">NAME</th>
                            <th class="columns-table-register-admin">LASTNAME</th>
                            <th class="columns-table-register-admin">ADDRESS</th>
                            <th class="columns-table-register-admin">PHONE</th>
                            <th class="columns-table-register-admin">EMAIL</th>
                            <th class="columns-table-register-admin">USER</th>
                            <th class="columns-table-register-admin">PASSWORD</th>
                            <th class="columns-table-register-admin">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result_register as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id_user']) ?></td>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td><?= htmlspecialchars($row['last_name']) ?></td>
                            <td><?= htmlspecialchars($row['address']) ?></td>
                            <td><?= htmlspecialchars($row['phone']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= htmlspecialchars($row['username']) ?></td>
                            <td><?= htmlspecialchars($row['password']) ?></td>
                            <td class="container-btn-actions-admin">
                                <form class="form-crud-admin" method="post">
                                    <input type="hidden" name="id_user" value="<?= $row['id_user'] ?>">
                                    <input type="hidden" name="action" value="delete">
                                    <button class="delte-btn-admin" type="submit">Delete</button>
                                </form>
                                <button class="edit-btn-admin" onclick="editRecord(
                                    '<?= $row['id_user'] ?>',
                                    '<?= $row['name'] ?>',
                                    '<?= $row['last_name'] ?>',
                                    '<?= $row['address'] ?>',
                                    '<?= $row['phone'] ?>',
                                    '<?= $row['email'] ?>',
                                    '<?= $row['username'] ?>',
                                    '<?= $row['password'] ?>'
                                )">Edit</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
                <script>
                    function editRecord(id, name, last_name, address, phone, email, username, password) {
                        document.querySelector('[name="id_user"]').value = id;
                        document.querySelector('[name="name"]').value = name;
                        document.querySelector('[name="last_name"]').value = last_name;
                        document.querySelector('[name="address"]').value = address;
                        document.querySelector('[name="phone"]').value = phone;
                        document.querySelector('[name="email"]').value = email;
                        document.querySelector('[name="username"]').value = username;
                        document.querySelector('[name="password"]').value = password;

                        document.querySelector('[name="action"]').value = 'edit';
                    }
                </script>
            </article>

            <article class="information3-container-register-admin" id="gamingPc">
                <!-- Formulario para añadir/editar -->
                <form class="form-information2-container-register-admin" method="post">
                    <input class="input-form-information2-registr-admin" type="hidden" name="id_chair" value="">
                    <input class="input-form-information2-registr-admin" type="hidden" name="action3" value="add"> <!-- action_chair en lugar de action3 -->
                    <input class="input-form-information2-registr-admin" type="text" name="weight" placeholder="Weight" required>
                    <input class="input-form-information2-registr-admin" type="text" name="height" placeholder="Height" required>
                    <input class="input-form-information2-registr-admin" type="text" name="color" placeholder="Color" required>
                    <input class="input-form-information2-registr-admin" type="text" name="fur" placeholder="Fur" required>
                    <input class="input-form-information2-registr-admin" type="text" name="price" placeholder="Price" required>
                    <button class="btnSaveIt" type="submit">Guardar</button>
                </form>

                <!-- Tabla de datos -->
                <table class="table-columns-register-admin" border="1">
                    <thead>
                        <tr>
                            <!-- Encabezados de columnas -->
                            <th class="columns-table-register-admin">ID</th>
                            <th class="columns-table-register-admin">Weight</th>
                            <th class="columns-table-register-admin">Height</th>
                            <th class="columns-table-register-admin">Color</th>
                            <th class="columns-table-register-admin">Fur</th>
                            <th class="columns-table-register-admin">Price</th>
                            <th class="columns-table-register-admin">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result_chair as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id_chair']) ?></td>
                            <td><?= htmlspecialchars($row['weight']) ?></td>
                            <td><?= htmlspecialchars($row['height']) ?></td>
                            <td><?= htmlspecialchars($row['color']) ?></td>
                            <td><?= htmlspecialchars($row['fur']) ?></td>
                            <td><?= htmlspecialchars($row['price']) ?></td>
                            <td class="container-btn-actions-admin">
                            <form class="form-crud-admin" method="post">
                                <input type="hidden" name="id_chair" value="<?= $row['id_chair'] ?>">
                                <input type="hidden" name="action3" value="delete"> <!-- Utilizando action3 en lugar de action_chair -->
                                <button class="delte-btn-admin" type="submit">Eliminar</button>
                            </form>
                            <!-- Botón para editar -->
                            <button class="edit-btn-admin" onclick="editRecord(
                                '<?= $row['id_chair'] ?>',
                                '<?= $row['weight'] ?>',
                                '<?= $row['height'] ?>',
                                '<?= $row['color'] ?>',
                                '<?= $row['fur'] ?>',
                                '<?= $row['price'] ?>'
                            )">Editar</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <script>
                    function editRecord(id, weight, height, color, fur, price) {
                    document.querySelector('[name="id_chair"]').value = id;
                    document.querySelector('[name="weight"]').value = weight;
                    document.querySelector('[name="height"]').value = height;
                    document.querySelector('[name="color"]').value = color;
                    document.querySelector('[name="fur"]').value = fur;
                    document.querySelector('[name="price"]').value = price;

                    document.querySelector('[name="action3"]').value = 'edit'; // action_chair en lugar de action
                }
                </script>
            </article>

        </section>
    </section>
</body>
</html>