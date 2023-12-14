<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sql_news";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

if (isset($_POST['accion']) && $_POST['accion'] == 'agregar') {
    $nombreCompleto = $_POST['nombreCompleto'];
    $curp = $_POST['curp'];
    $rfc = $_POST['rfc'];

    $sql = "INSERT INTO contribuyentes (nombreCompleto, curp, rfc) VALUES ('$nombreCompleto', '$curp', '$rfc')";

    if ($conn->query($sql) === TRUE) {
        echo "Contribuyente agregado con éxito";
    } else {
        echo "Error al agregar el contribuyente: " . $conn->error;
    }
}

if (isset($_POST['accion']) && $_POST['accion'] == 'editar') {
    $id = $_POST['id'];
    $nombreCompleto = $_POST['nombreCompleto'];
    $curp = $_POST['curp'];
    $rfc = $_POST['rfc'];

    $sql = "UPDATE contribuyentes SET nombreCompleto='$nombreCompleto', curp='$curp', rfc='$rfc' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Contribuyente actualizado con éxito";
    } else {
        echo "Error al actualizar el contribuyente: " . $conn->error;
    }
}

if (isset($_POST['accion']) && $_POST['accion'] == 'eliminar') {
    $id = $_POST['id'];
    $sql = $conn->prepare("DELETE FROM contribuyentes WHERE id=?");
    $sql->bind_param("i", $id);

    if ($sql->execute()) {
        echo "Contribuyente eliminado con éxito";
    } else {
        echo "Error al eliminar el contribuyente: " . $conn->error;
    }
    $sql->close();
}

$sql = "SELECT * FROM contribuyentes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Contribuyentes</title>
    <link rel="stylesheet" href="">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        /* Estilos anteriores */
        /* ... */

        /* Estilos para los modales */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .modal-content {
            background-color: white;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <h1>Gestión de Contribuyentes</h1>

    <button class="agregar-btn" onclick="abrirModal('agregarContribuyenteModal')">Agregar Contribuyente</button>

    <div id="agregarContribuyenteModal" class="modal">
        <div class="modal-content">
            <h2>Ingresar Contribuyente</h2>
            <form id="agregarForm">
                <label for="nombreCompleto">Nombre Completo:</label>
                <input type="text" id="nombreCompleto" name="nombreCompleto" required>
                <label for="curp">CURP:</label>
                <input type="text" id="curp" name="curp" required>
                <label for="rfc">RFC:</label>
                <input type="text" id="rfc" name="rfc" required>
                <input type="hidden" name="accion" value="agregar">
                <button type="button" onclick="agregarContribuyente()">Agregar</button>
                <button type="button" onclick="cerrarModal('agregarContribuyenteModal')">Cancelar</button>
            </form>
        </div>
    </div>

    <h2>Lista de Contribuyentes</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>CURP</th>
                <th>RFC</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["nombreCompleto"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["curp"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["rfc"]) . "</td>";
                echo "<td><button onclick='editarContribuyente(" . $row["id"] . ", \"" . htmlspecialchars($row["nombreCompleto"]) . "\", \"" . htmlspecialchars($row["curp"]) . "\", \"" . htmlspecialchars($row["rfc"]) . "\")'>Editar</button> | <button onclick='eliminarContribuyente(" . $row["id"] . ")'>Eliminar</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron contribuyentes.</td></tr>";
        }

        $conn->close();
        ?>
        </tbody>
    </table>

    <div id="editarContribuyenteModal" class="modal">
        <div class="modal-content">
            <h2>Editar Contribuyente</h2>
            <form id="editarForm">
                <input type="hidden" id="editId" name="editId">
                <label for="editNombreCompleto">Nombre Completo:</label>
                <input type="text" id="editNombreCompleto" name="editNombreCompleto" required>
                <label for="editCurp">CURP:</label>
                <input type="text" id="editCurp" name="editCurp" required>
                <label for="editRfc">RFC:</label>
                <input type="text" id="editRfc" name="editRfc" required>
                <input type="hidden" name="accion" value="editar">
                <button type="button" onclick="guardarCambios()">Guardar Cambios</button>
                <button type="button" onclick="cerrarModal('editarContribuyenteModal')">Cancelar</button>
            </form>
        </div>
    </div>

    <div id="eliminarContribuyenteModal" class="modal">
        <div class="modal-content">
            <h2>Eliminar Contribuyente</h2>
            <p>¿Estás seguro de que deseas eliminar este contribuyente?</p>
            <form id="eliminarForm">
                <input type="hidden" id="deleteId" name="deleteId">
                <input type="hidden" name="accion" value="eliminar">
                <button type="button" onclick="eliminarContribuyente()">Sí, Eliminar</button>
                <button type="button" onclick="cerrarModal('eliminarContribuyenteModal')">Cancelar</button>
            </form>
        </div>
    </div>

    <script>
        function abrirModal(modalId) {
            document.getElementById(modalId).style.display = 'block';
        }

        function cerrarModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        function editarContribuyente(id, nombreCompleto, curp, rfc) {
            abrirModal('editarContribuyenteModal');
            document.getElementById('editId').value = id;
            document.getElementById('editNombreCompleto').value = nombreCompleto;
            document.getElementById('editCurp').value = curp;
            document.getElementById('editRfc').value = rfc;
        }

        function eliminarContribuyente(id) {
            abrirModal('eliminarContribuyenteModal');
            document.getElementById('deleteId').value = id;
        }

        function eliminarContribuyente() {
            var id = document.getElementById('deleteId').value;

            $.ajax({
                type: 'POST',
                url: 'contribuyentes.php',
                data: { accion: 'eliminar', id: id },
                success: function (response) {
                    console.log(response);
                    cerrarModal('eliminarContribuyenteModal');
                    location.reload();
                },
                error: function () {
                    alert('Error al eliminar el contribuyente.');
                }
            });
        }

        function agregarContribuyente() {
            var nombreCompleto = document.getElementById('nombreCompleto').value;
            var curp = document.getElementById('curp').value;
            var rfc = document.getElementById('rfc').value;

            $.ajax({
                type: 'POST',
                url: 'contribuyentes.php',
                data: { accion: 'agregar', nombreCompleto: nombreCompleto, curp: curp, rfc: rfc },
                success: function (response) {
                    cerrarModal('agregarContribuyenteModal');
                    location.reload();
                },
                error: function () {
                    alert('Error al agregar el contribuyente.');
                }
            });
        }

        function guardarCambios() {
            var id = document.getElementById('editId').value;
            var nombreCompleto = document.getElementById('editNombreCompleto').value;
            var curp = document.getElementById('editCurp').value;
            var rfc = document.getElementById('editRfc').value;

            $.ajax({
                type: 'POST',
                url: 'contribuyentes.php',
                data: { accion: 'editar', id: id, nombreCompleto: nombreCompleto, curp: curp, rfc: rfc },
                success: function (response) {
                    cerrarModal('editarContribuyenteModal');
                    location.reload();
                },
                error: function () {
                    alert('Error al guardar los cambios.');
                }
            });
        }
    </script>
</body>
</html>
