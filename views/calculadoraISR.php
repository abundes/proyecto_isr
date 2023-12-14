<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora ISR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../public/css/estilos.css">
    <link rel="icon" href="../public/img/calculadora.png" type="image/x-icon">
</head>
<body>
    <div class="cont_menu">
        <div class="logo">
            <a href="../views/home.php">
                <i class="fa-solid fa-calculator"></i>
                <h2>Calculadora fiscal</h2>
            </a>
        </div>    
        <div class="enlaces">            
            <a class="activo" href="../views/calculadoraISR.php">CALCULADORA ISR</a>
            <a href="../views/calculadoraIVA.php">CALCULADORA IVA</a>
            <a href="../views/contribuyentes.php">CONTRIBUYENTES</a>
        </div>
        <div class="cont_btns">

            <a href="#" class="btn">
                <button>
                    <i class="fa-regular fa-user"></i>
                </button>
            </a>
            <a href="#" class="btn">
                <button>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </a>
        </div>
    </div>

    <main>        
        <div class="cont_title">
            <h2>CALCULO DEL IMPUESTO SOBRE LA RENTA</h2>
        </div>
        <div class="combo_from">
            <div class="combo_head">
                <i class="fa-solid fa-sort-down"></i>
                <h2>DATOS PERSONALES</h2>
            </div>
            <div class="combo_body">
                <form action="">
                    <div class="colum-center">
                        <label>Nombre completo</label>
                        <input type="text">
                    </div>
                    <div class="colum-right">
                        <label for="">RFC</label>
                        <input type="text">
                    </div>
                    <div class="colum-left">
                        <label for="">CURP</label>
                        <input type="text">                    
                    </div>
                </form>
            </div>
        </div>

        <div class="combo_from">
            <div class="combo_head">
                <i class="fa-solid fa-sort-down"></i>
                <h2>GASTOS</h2>
            </div>
            <div class="combo_body">
                <form action="">
                    <div class="colum-right">
                    <label for="compras">Compras:</label>
        <input type="text" name="compras" id="compras" onkeyup="calcularIngresosGravables()"><br>

        <label for="combustibles">Combustibles y lubricantes:</label>
        <input type="text" name="combustibles" id="combustibles" onkeyup="calcularIngresosGravables()"><br><br>

        <label for="manto_equipo">Manto de equipo:</label>
        <input type="text" name="manto_equipo" id="manto_equipo" onkeyup="calcularIngresosGravables()"><br><br>

        <label for="cuota_imss_infonavit">Cuota IMSS RVC e Infonavit:</label>
        <input type="text" name="cuota_imss_infonavit" id="cuota_imss_infonavit" onkeyup="calcularIngresosGravables()"><br><br>

        <label for="diversos">Diversos:</label>
        <input type="text" name="diversos" id="diversos" onkeyup="calcularIngresosGravables()"><br><br>

        <label for="deprestaciones">Deprestaciones:</label>
        <input type="text" name="deprestaciones" id="deprestaciones" onkeyup="calcularIngresosGravables()"><br><br>

        <label for="comisiones_bancarias">Comisiones bancarias:</label>
        <input type="text" name="comisiones_bancarias" id="comisiones_bancarias" onkeyup="calcularIngresosGravables()"><br><br>

        <label for="sueldos_salarios">Sueldos y salarios:</label>
        <input type="text" name="sueldos_salarios" id="sueldos_salarios" onkeyup="calcularIngresosGravables()"><br><br>

        <span id="Deducciones"></span>
                    </div>
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

                </form>
            </div>
        </div>

        <div class="combo_from">
            <div class="combo_head">
                <i class="fa-solid fa-sort-down"></i>
                <h2>DATOS A CALCULAR</h2>
            </div>
            <div class="combo_body">
                <form action="">
                    <div class="colum-right">
                        <div class="box_input">
                        <label for="mes">Mes</label>
                        
                            <select id="mes" onchange="mostrarTabla(this.value)">
                                <option selected>-- Seleccionar --</option>
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
                        </div>
                        <div class="box_input">
                            <label for="">Ingresos gravados</label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">(-) Deduccion</label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">(-) Perdida Fiscal De Ejercicios Ant</label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">(-) Base Gravable </label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">(-) Limite Inferior</label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">(-) Exedente de Limite Inferior</label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for=""> % </label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">(-)Impuesto Marginal</label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">(+) Cuotafija</label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">(-) Impuesto Art 113 L.I.S.R</label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">(-) I.S.R Retenido</label>
                            <input type="text">
                        </div>
                      
                    </div>
                    <div class="colum-left">
                        <div class="box_input">
                            <label for="">(-) Pagos provicionales Efect</label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">(-) Impuesto acargo</label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">Subsidio al empleo</label>
                            <input type="text">
                        </div>
                        <div class="box_input">
                            <label for="">(-) Neto a cargo o favor</label>
                            <input type="text">
                        </div>
                        
                        
</head>


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
    
    
<div id="resultadoCalculadora"></div>

    <div id="resultado"></div>

       
                    </div>
                </form>
            </div>
        </div>

        <div class="combo_from">
            <div class="combo_head">
                <i class="fa-solid fa-sort-down"></i>
                <h2>CALCULO SOBRE EL IMPUESTO SOBRE LA RENTA</h2>
            </div>
            <div class="combo_body">
                <form action="">
                    <div class="colum-right">
                        <div class="box_input">
                            <label for="mes">Mes</label>
                            <select id="mes" >
                                <option selected>-- Seleccionar --</option>
                                <option value="enero">Enero</option>
                                <option value="febrero">Febrero</option>
                                <option value="marzo">Marzo</option>
                                <option value="abril">Abril</option>
                                <option value="mayo">Mayo</option>
                                <option value="junio">Junio</option>
                                <option value="julio">Julio</option>
                                <option value="agosto">Agosto</option>
                                <option value="septiembre">Septiembre</option>
                                <option value="octubre">Octubre</option>
                                <option value="noviembre">Noviembre</option>
                                <option value="diciembre">Diciembre</option>
                            </select>
                        </div>
                        <div class="box_input">
                            <table>
                                <tr>
                                    <td></td>
                                    <td>INGRESOS</td>
                                    <td>$ 00.0 </td>
                                </tr>
                                <tr>
                                    <td>(-)</td>
                                    <td>DEDUCCIONES</td>
                                    <td>$ 00.0</td>
                                </tr>
                                <tr>
                                    <td>(=)</td>
                                    <td>BASE DEL CALCULO</td>
                                    <td>$ 00.0</td>
                                </tr>
                            </table>
                        </div>
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <button class="btn btn-second" type="submit">Editar</button>
                    </div>
                    <div class="colum-left">
                        <div class="box_input">
                            <table class="tabla-resumen">
                                <tr>
                                    <td>(-)</td>
                                    <td>LIMITE INFERIOR</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>(=)</t>
                                    <td>BASE DE IMPUESTO</t>
                                    <td></t>
                                </tr>
                                <tr>
                                    <td>(X)</td>
                                    <td>TASA</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>(=)</td>
                                    <td>IMPUESTO MARGINAL</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>(+)</td>
                                    <td>CUOTA FIJA</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>(=)</td>
                                    <td>IMPORTE A ISR</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
        
    </main>

    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="../public/img/calculadora.png" alt="error">
                </div>
                <div class="terms">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit cum cumque velit libero officiis quam doloremque reprehenderit.</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Soluciones</h2>
                <a href="https://www.google.com">App Desarrollo</a>
                <a href="#">App Marketing</a>
                <a href="#">IOS Desarrollo</a>
                <a href="#">Android Desarrollo</a>
            </div>

            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="#">Acerca de</a>
                <a href="#">Trabajos</a>
                <a href="#">Procesos</a>
                <a href="#">Servicios</a>              
            </div>

            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>

        </div>

        <div class="box__copyright">
            <hr>
            <p>INGERIA EN DESARROLLO DE SOFTWARE © 2023 - 2024 <b> 10° A</b></p>
        </div>
    </footer>
    <script>
        var datosFicticios = [
            { d1: 1, d2: 1, d3: 1, d4: 1 },
            { d1: 2, d2: 2, d3: 2, d4: 2 },
            { d1: 3, d2: 3, d3: 3, d4: 3 },
            { d1: 4, d2: 4, d3: 4, d4: 4 },
            { d1: 5, d2: 5, d3: 5, d4: 5 },
            { d1: 6, d2: 6, d3: 6, d4: 6 },
            { d1: 7, d2: 7, d3: 7, d4: 7 },
            { d1: 8, d2: 8, d3: 8, d4: 8 },
            { d1: 9, d2: 9, d3: 9, d4: 9 },
            { d1: 10, d2: 10, d3: 10, d4: 10 },
            { d1: 11, d2: 11, d3: 11, d4: 11 },
            
        ];

        // Función para generar filas de datos en la tabla
        function generarFilasTabla(datos) {
            var tbody = document.getElementById('miTabla').getElementsByTagName('tbody')[0];

            datos.forEach(function (dato) {
                var fila = tbody.insertRow();
                var celdas = Object.values(dato);

                celdas.forEach(function (valor) {
                    var celda = fila.insertCell();
                    celda.textContent = valor;
                });
            });
        }

        // Llamada a la función para generar las filas de datos con los datos ficticios
        generarFilasTabla(datosFicticios);


        // Obtén todas las referencias a los contenedores combo_head y combo_body
        const comboHeads = document.querySelectorAll(".combo_head");
        const comboBodies = document.querySelectorAll(".combo_body");

        // Agrega un evento de clic a cada combo_head
        comboHeads.forEach((comboHead, index) => {
            comboHead.addEventListener("click", function() {
                // Verifica si el combo_body correspondiente está visible
                if (comboBodies[index].style.display === "none" || comboBodies[index].style.display === "") {
                    // Si está oculto, muéstralo
                    comboBodies[index].style.display = "block";
                    comboHead.classList.remove("rounded");
                } else {
                    // Si está visible, ocúltalo
                    comboBodies[index].style.display = "none";
                    comboHead.classList.add("rounded");
                }
            });
        });
    </script>

    <script src="../public/js/script.js"></script>
</body>
</html>