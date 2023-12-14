<html>
<head>
    <title>Calculadora de ISR</title>
    <script type="text/javascript">
        function calcularIngresosGravables() {
            var compras = parseFloat(document.getElementById("compras").value) || 0;
            var combustibles = parseFloat(document.getElementById("combustibles").value) || 0;
            var manto_equipo = parseFloat(document.getElementById("manto_equipo").value) || 0;
            var cuota_imss_infonavit = parseFloat(document.getElementById("cuota_imss_infonavit").value) || 0;
            var diversos = parseFloat(document.getElementById("diversos").value) || 0;
            var deprestaciones = parseFloat(document.getElementById("deprestaciones").value) || 0;
            var comisiones_bancarias = parseFloat(document.getElementById("comisiones_bancarias").value) || 0;
            var sueldos_salarios = parseFloat(document.getElementById("sueldos_salarios").value) || 0;

            var Deducciones = compras + combustibles + manto_equipo + cuota_imss_infonavit + diversos + deprestaciones + comisiones_bancarias + sueldos_salarios;

            document.getElementById("Deducciones").innerHTML = "Deducciones $" + Deducciones.toFixed(2);
        }
    </script>
</head>
<body>
    <h1>Calculadora de ISR</h1>
    <form method="post" action="">
        <label for="compras">Compras:</label>
        <input type="text" name="compras" id="compras" onkeyup="calcularIngresosGravables()"><br>

        <label for="combustibles">Combustibles y lubricantes:</label>
        <input type="text" name="combustibles" id="combustibles" onkeyup="calcularIngresosGravables()"><br>

        <label for="manto_equipo">Manto de equipo:</label>
        <input type="text" name="manto_equipo" id="manto_equipo" onkeyup="calcularIngresosGravables()"><br>

        <label for="cuota_imss_infonavit">Cuota IMSS RVC e Infonavit:</label>
        <input type="text" name="cuota_imss_infonavit" id="cuota_imss_infonavit" onkeyup="calcularIngresosGravables()"><br>

        <label for="diversos">Diversos:</label>
        <input type="text" name="diversos" id="diversos" onkeyup="calcularIngresosGravables()"><br>

        <label for="deprestaciones">Deprestaciones:</label>
        <input type="text" name="deprestaciones" id="deprestaciones" onkeyup="calcularIngresosGravables()"><br>

        <label for="comisiones_bancarias">Comisiones bancarias:</label>
        <input type="text" name="comisiones_bancarias" id="comisiones_bancarias" onkeyup="calcularIngresosGravables()"><br>

        <label for="sueldos_salarios">Sueldos y salarios:</label>
        <input type="text" name="sueldos_salarios" id="sueldos_salarios" onkeyup="calcularIngresosGravables()"><br>

        <span id="Deducciones"></span><br>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores ingresados por el usuario
        $compras = floatval($_POST["compras"]);
        $combustibles = floatval($_POST["combustibles"]);
        $manto_equipo = floatval($_POST["manto_equipo"]);
        $cuota_imss_infonavit = floatval($_POST["cuota_imss_infonavit"]);
        $diversos = floatval($_POST["diversos"]);
        $deprestaciones = floatval($_POST["deprestaciones"]);
        $comisiones_bancarias = floatval($_POST["comisiones_bancarias"]);
        $sueldos_salarios = floatval($_POST["sueldos_salarios"]);

        // Calcular la suma de los ingresos gravables
        $ingresos_gravables = $compras + $combustibles + $manto_equipo + $cuota_imss_infonavit + $diversos + $deprestaciones + $comisiones_bancarias + $sueldos_salarios;

        // Realizar el cálculo del ISR para enero
        function calcularISRenero($ingresos) {
            // ... (Tu código para calcular el ISR va aquí)
        }
        
        // Calcular el ISR para enero
        $isr_enero = calcularISRenero($ingresos_gravables);

     
    }
    ?>
</body>
</html>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabla ISR</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="encabezado">
        <form>
            <h2>Selecciona un mes</h2>
            <select id="mes" onchange="mostrarTabla(this.value)">
                <option value="">selecciona un mes</option>
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
                <option value="6">Junio</option>
                <option value="7">Julio</option>
                <option value="8">Agosto</option>
                <option value="9">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </select>
        </form>
    </div>

    <div id="resultado"></div>

    <script>
    function mostrarTabla(mes) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("resultado").innerHTML = xmlhttp.responseText;
            }
        }

        xmlhttp.open("GET", `procesar.php?opcion=mostrarTabla&mes=${mes}`, true);
        xmlhttp.send();
    }

    function calcular() {  
        var sueldo = document.getElementById("SaldoBruto").value;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("resultadoCalculo").innerHTML = xmlhttp.responseText;
            }
        }

        xmlhttp.open("GET", `procesar.php?opcion=calcular&saldoBruto=${sueldo}`, true);
        xmlhttp.send();
    }
    </script>
</body>
</html>
