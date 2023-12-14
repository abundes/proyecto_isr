<!DOCTYPE html>
<html>
<head>
    <title>Panel de Administración</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        #sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }

        #header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .menu-item {
            padding: 10px;
            border-bottom: 1px solid #555;
        }

        .menu-item:last-child {
            border-bottom: none;
        }

        .menu-item a {
            text-decoration: none;
            color: #fff;
        }

        .menu-item:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <div id="header">
            <h2>Panel de Administración</h2>
        </div>
        <div class="menu-item">
            <a href="#">Inicio</a>
        </div>
        <div class="menu-item">
            <a href="#">Usuarios</a>
        </div>
        <div class="menu-item">
            <a href="#">Productos</a>
        </div>
        <div class="menu-item">
           <!-- Botón de Cerrar Sesión -->
<form action="logout.php" method="post">
    <button type="submit">Cerrar Sesión</button>
</form>
        </div>

        <!-- Agrega más elementos de menú según tus necesidades -->
    </div>
    <div id="content">
        <h1>Bienvenido, Administrador</h1>
        <p>Aquí puedes administrar usuarios, productos y otras tareas relacionadas con la administración.</p>
    </div>
</body>
</html>
