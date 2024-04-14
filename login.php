<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Conexión a la base de datos (cambia las credenciales según tu configuración)
    $servername = "localhost";
    $dbusername = "INGJADE";
    $dbpassword = "JADE2023.";
    $dbname = "logicnest";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Comprueba la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta SQL para verificar las credenciales del administrador
    $sql_admin = "SELECT * FROM register WHERE username = 'admin' AND password = 'admin123'";
    $result_admin = $conn->query($sql_admin);

    // Verifica si el usuario es admin
    if ($result_admin->num_rows > 0 && $username == 'admin' && $password == 'admin123') {
        // Redirige al admin.php si el usuario es admin
        header("Location: admin.php");
        exit(); // Termina la ejecución del script después de la redirección
    }

    // Consulta SQL para verificar las credenciales del usuario en la base de datos
    $sql_user = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $result_user = $conn->query($sql_user);

    // Verifica si las credenciales coinciden con algún usuario registrado
    if ($result_user->num_rows > 0) {
        // Redirige a index.php y muestra mensaje de inicio exitoso
        header("Location: index.php?msg=Inicio%20correctamente");
        exit(); // Termina la ejecución del script después de la redirección
    } else {
        // Establece el mensaje de error para mostrar en la página
        $errorMsg = "Usuario o contraseña incorrecta. Por favor, inténtalo de nuevo o regístrate.";
        echo "<script>alert('$errorMsg');</script>";
    }

    $conn->close(); // Cierra la conexión a la base de datos
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="loginStyle.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">

</head>
<body>
    <video autoplay muted loop id="background-video">
        <source src="./userLogin/Login/videoLogin2.mp4" type="video/mp4">
    </video>
    <div class="father-container-login">

        <form class="form-container-login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h2 class="title-father-container-login">Login Form</h2>
            <div class="information-form-container">
                <label class="title-form-container-login" for="username">User:</label>
                <input class="btn-container-form-login" type="text" id="username" name="username" required>
            </div>
            <div class="information2-form-container">
                <label class="title-form-container-login" for="password">Password:</label>
                <input class="btn-container-form-login" type="password" id="password" name="password" required>
            </div>

            <div class="btns-container-form-login">
                <input class="btn-signIn-form-login" type="submit" value="Sign In">
                <input id="registerBtn" class="btn-register-form-login" type="button" value="Register">
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                var registerBtn = document.getElementById('registerBtn');
                
                registerBtn.addEventListener('click', function() {
                    window.location.href = 'register.php';
                });
            });
            </script>
        </form>
    </div>
</body>
</html>