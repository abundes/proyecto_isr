<?php
session_start();

// Si el usuario ya ha iniciado sesión, redireccionar a la página adecuada
if (isset($_SESSION["usuario_id"])) {
    if ($_SESSION["rol"] == "admin") {
        header("Location: admin.php");
        exit;
    } elseif ($_SESSION["rol"] == "usuario") {
        header("Location: views/home.php");
        exit;
    }
}

// Conexión a la base de datos (configuración de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sql_news";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Lógica de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo_electronico = $_POST["correo_electronico"];
    $contrasena = $_POST["contrasena"];

    $sql = "SELECT * FROM Usuarios WHERE correo_electronico = '$correo_electronico' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso
        $row = $result->fetch_assoc();
        $rol = $row["rol"];
        $_SESSION["usuario_id"] = $row["usuario_id"];
        $_SESSION["rol"] = $rol;

        // Redireccionar según el rol
        if ($rol == "admin") {
            header("Location: admin.php");
            exit;
        } elseif ($rol == "usuario") {
            header("Location: views/home.php");
            exit;
        }
    } else {
        echo "Inicio de sesión fallido. Verifica tus credenciales.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <!-- Estilos CSS como se mencionó anteriormente -->
</head>
<body>
    <div class="login-form">
        <h2>Iniciar Sesión</h2>
        <form method="post">
            <div class="form-group">
                <label for="correo_electronico">Correo Electrónico:</label>
                <input type="text" id="correo_electronico" name="correo_electronico" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <div class="form-group">
                <button type="submit">Iniciar Sesión</button>
            </div>
        </form>
    </div>
</body>
</html>
