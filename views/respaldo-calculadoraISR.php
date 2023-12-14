<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora ISR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../public/css/estilos.css">
    <link rel="icon" href="../../public/img/calculadora.png" type="image/x-icon">
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
        <h2>CALCULO SOBRE EL IMPUESTO SOBRE LA RENTA</h2>
        <div class="cont_tarjeta_comb">
            <div class="tarjeta_comb">
                <div class="tc_cabezera">
                    <i class="fa-solid fa-sort-down"></i>                    
                    <h2>Gastos</h2>
                </div>
                <div class="tc_cuerpo">
                    <form action="">
                        <div class="cont-input">
                            <label for="">Nombre completo</label>
                            <input type="text">
                        </div>
                        <div class="cont-input col1" >
                            <label for="">CURP</label>
                            <input type="text">
                        </div>
                        <div class="cont-input col2">
                            <label for="">RFC</label>
                            <input type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="cont_tarjeta_comb">
            <div class="tarjeta_comb">
                <div class="tc_cabezera">
                    <i class="fa-solid fa-sort-down"></i>                    
                    <h2>Datos de la persona</h2>
                </div>
                <div class="tc_cuerpo">
                    <form action="">
                        <div class="form-left col1">
                            <div class="entrada_datos">
                                <label for="">COMPRAS</label>
                                <input type="number">
                            </div>
                            <div class="entrada_datos">
                                <label for="">COMBUSTIBLES Y LUBRICANTES</label>
                                <input type="number">
                            </div>
                            <div class="entrada_datos">
                                <label for="">MANTO DE EQUIPO DE TRANSPORTE</label>
                                <input type="number">
                            </div>
                            <div class="entrada_datos">
                                <label for="">CUOTA IMSS RVC E INFONAVIT</label>
                                <input type="number">
                            </div>
                            <div class="entrada_datos">
                                <label for="">DIVERSOS</label>
                                <input type="number">
                            </div>
                            <div class="entrada_datos">
                                <label for="">DEPRECIACIONES</label>
                                <input type="number">
                            </div>
                        </div>
                        <div class="form-rigth col2">
                            <div class="entrada_datos">
                                <label for="">COMICIONES BANCARIAS</label>
                                <input type="number">
                            </div>

                            <div class="entrada_datos">
                                <label for="">SUELDOS Y SALARIOS</label>
                                <input type="number">
                            </div>
                            <div class="resultados">
                                <label for="">INGRESOS MENSUALES $ 0.0</label>
                                <label for="">DEDUCCIONES MENSUALES $ 0.0</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="cont_tarjeta_comb">
            <div class="tarjeta_comb">
                <div class="tc_cabezera">
                    <i class="fa-solid fa-sort-down"></i>                    
                    <h2>Datos a calcular</h2>
                </div>
                <div class="tc_cuerpo">
                    <div class="col1">
                        
                        <input type="date" name="" id="">
                        <div class="entrada_datos">
                            <label for="">INGRESOS</label>
                            <input type="number">
                        </div>                        
                        <div class="entrada_datos">

                            <label for="">(-) DEDUCCION</label>
                            <input type="number">
                        </div>
                        <div class="entrada_datos">

                            <label for="">(-) PERDIDA FISCAL DE EJERCICIOS</label>
                            <input type="number">
                        </div>
                        <div class="entrada_datos">

                            <label for="">(-) PAGOS PROVOSIONALES EFECT.ANT.</label>
                            <input type="number">
                        </div>                        
                        <div class="entrada_datos">

                            <label for="">(=) IMPUESTO A CARGO</label>
                            <input type="number">
                        </div>
                        <div class="entrada_datos">

                            <label for="">SUBSIDIO AL EMPLEO</label>
                            <input type="number">
                        </div>
                    </div>
                    <div class="col2">
                        <table>
                            <thead>
                                <td>
                                    <tr>Lim. Inferior en $</tr>
                                    <tr>Lim. Superior en $</tr>
                                    <tr>Cuota fija en $</tr>
                                    <tr>% sobre la renta exedente del limite superior</tr>                                    
                                </td>
                            </thead>
                            <tbody>
                                <td>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                </td>
                                <td>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                </td>
                                <td>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                </td>
                                <td>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                </td>
                                <td>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                </td>
                                <td>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                </td>
                                <td>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                </td>
                                <td>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                </td>
                                <td>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                </td>
                                <td>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                </td>
                                <td>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                </td>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="cont_tarjeta_comb">
            <div class="tarjeta_comb">
                <div class="tc_cabezera">
                    <i class="fa-solid fa-sort-down"></i>                    
                    <h2>Datos de la persona</h2>
                </div>
                <div class="tc_cuerpo">
                    <form action="">
                        <div class="cont-input col1">
                            <label for="">COMPRAS</label>
                            <input type="number">
                            <label for="">COMBUSTIBLES Y LUBRICANTES</label>
                            <input type="number">
                            <label for="">MANTO DE EQUIPO DE TRANSPORTE</label>
                            <input type="number">
                            <label for="">CUOTA IMSS RVC E INFONAVIT</label>
                            <input type="number">
                            <label for="">DIVERSOS</label>
                            <input type="number">
                            <label for="">DEPRECIACIONES</label>
                            <input type="number">
                        </div>
    
                        <div class="cont-input col2">
                            <label for="">COMICIONES BANCARIAS</label>
                            <input type="number">
                            <label for="">SUELDOS Y SALARIOS</label>
                            <input type="number">
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </main>
</body>
</html>