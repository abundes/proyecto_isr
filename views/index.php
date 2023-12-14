<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora ISR y IVA</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/estilos.css">
</head>
<body class="cuerpo">
    <div class="wrapper">
        <div class="imgcontainer">
            <img src="public/img/icono_login.png" alt="Avatar" class="avatar">
        </div>
        <h1>Iniciar Sesión</h1>
        <form action="">
            <div class="input-box">
                <input type="text" placeholder="Nombre de usuario" require>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" name="" id="" require>
                <i class="fa-solid fa-lock"></i>
            </div>

            <!-- <div class="remember-forgot">
                <label for=""><input type="checkbox" name="" id="">Recordarme</label>
                <a href="app/views/home.php">Cambiar mi contraseña</a>
            </div> -->
            <button type="submit" class="btn">Iniciar Sesión</button>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>