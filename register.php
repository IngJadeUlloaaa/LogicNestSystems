<?php

$servername = "localhost";
$dbname = "logicnest";
$dbusername = "INGJADE";
$dbpassword = "JADE2023.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST["name"]);
    $last_name = test_input($_POST["last_name"]);
    $address = test_input($_POST["address"]);
    $phone = test_input($_POST["phone"]);
    $email = test_input($_POST["email"]);
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare("INSERT INTO register (name, last_name, address, phone, email, username, password) VALUES (:name, :last_name, :address, :phone, :email, :username, :password)");
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        
        $stmt->execute();

        $conn = null;

        echo "<script>alert('Gracias por registrarte'); window.location.href = 'index.php';</script>";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
    
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
    <div class="father-container-register">
        <form class="form-container-register" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h2 class="title-container-register">Registration Form</h2>

            <div class="son-container-form-register">
            
                <div class="information-container-form-register">
                    <label class="title-form-container-form-register" for="name">Name:</label>
                    <input class="btn-form-register" type="text" id="name" name="name" required>
                </div>

                <div class="information-container-form-register">
                    <label class="title-form-container-form-register" for="surname">Surname:</label>
                    <input class="btn-form-register" type="text" id="surname" name="surname" required>
                </div>

                <div class="information-container-form-register">
                    <label class="title-form-container-form-register" for="address">Address:</label>
                    <input class="btn-form-register" type="text" id="address" name="address" required>
                </div>

                <div class="information-container-form-register">
                    <label class="title-form-container-form-register" for="phone">Phone:</label>
                    <input class="btn-form-register" type="text" id="phone" name="phone" required>
                </div>

                <div class="information-container-form-register">
                    <label class="title-form-container-form-register" for="gmail">Gmail:</label>
                    <input class="btn-form-register" type="email" id="gmail" name="gmail" required>
                </div>

                <div class="information-container-form-register">
                    <label class="title-form-container-form-register" for="username">User:</label>
                    <input class="btn-form-register" type="text" id="username" name="username" required>
                </div>

                <div class="information-container-form-register">
                    <label class="title-form-container-form-register" for="password">Password:</label>
                    <input class="btn-form-register" type="password" id="password" name="password" required>
                </div>
            </div>

            <input class="btn-register-form-register" type="submit" value="Register">
        </form>
    </div>
</body>
</html>