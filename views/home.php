<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../public/css/estilos.css">
    <link rel="icon" href="../public/img/calculadora.png" type="image/x-icon">
</head>
<body>
    <div class="cont_home">
        <div class="cont_title">
            <h3 class="title">Bienvenidos</h3>
        </div>
        <div class="cont_icons">
            <i class="fa-solid fa-money-bill-trend-up"></i>
            <i class="fa-solid fa-chart-column"></i>
            <i class="fa-solid fa-chart-line"></i>
            <i class="fa-regular fa-building"></i>
            <i class="fa-solid fa-file-excel"></i>
        </div>
    </div>

    <div class="cont_menu">
        <div class="logo">
            <i class="fa-solid fa-calculator"></i>
            <h2>Calculadora fiscal</h2>
        </div>    
        <div class="cont_btns">
            <a href="../views/infoPerfil.php" class="btn">
                <button>
                    <i class="fa-regular fa-user"></i>
                </button>
            </a>
            <a href="#" class="btn">
                    <!-- Botón de Cerrar Sesión -->
<form action="../logout.php" method="post">
    <button type="submit">
            
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </a>
        </div>
    </div>

    <div class="container__slider">
        <div class="container">
            <input type="radio" name="slider" id="item-1" checked>
            <input type="radio" name="slider" id="item-2">
            <input type="radio" name="slider" id="item-3">
            <div class="cards">
            <label class="card" for="item-2" id="selector-2">
                    <a href="contribuyentes.php"id="enlace2">
                    <img src="../public/img/icono_contribuyentes.png" alt="error de imagen">
                        Contribuyentes
                    </a>
                </label>
                <label class="card" for="item-1" id="selector-1">
                    <a href="calculadoraISR.php" id="enlace1">
                        <img src="../public/img/icono_isr.png" alt="error de imagen">
                        ISR
                    </a>
                </label>
                <label class="card" for="item-3" id="selector-3">
                    <a href="calculadoraIVA.php" id="enlace3" >
                    <img src="../public/img/icono_iva.png" alt="error de imagen">
                       Iva
                    </a>
                </label>
            </div>
        </div>
    </div>
    
    <h2 class="title-h2">CONTRIBUYENTES RESIENTES</h2>
    <div class="cont_cards">
        <!-- ESTA ES UNA TARJETA PARA LOS CONTRIBUYENTES -->
        <div class="card_c">
            <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
            </div>
            <div class="info">
                <p><b>Nombre completo</b></p>
                <p>Panfilo Perez García</p>
                <p><b>CURP</b></p>
                <p>PEGA9812983H</p>
                <p><b>RFC</b></p>
                <p>GAPE983H</p>
                <div class="cont_btns_card_c">
                    <button class="btn_primario btn_card_c">IVA</button>
                    <button class="btn_primario btn_card_c">ISR</button>
                </div>
            </div>
        </div>
        <div class="card_c">
            <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
            </div>
            <div class="info">
                <p><b>Nombre completo</b></p>
                <p>Panfilo Perez García</p>
                <p><b>CURP</b></p>
                <p>PEGA9812983H</p>
                <p><b>RFC</b></p>
                <p>GAPE983H</p>
                <div class="cont_btns_card_c">
                    <button class="btn_primario btn_card_c">IVA</button>
                    <button class="btn_primario btn_card_c">ISR</button>
                </div>
            </div>
        </div>
        <div class="card_c">
            <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
            </div>
            <div class="info">
                <p><b>Nombre completo</b></p>
                <p>Panfilo Perez García</p>
                <p><b>CURP</b></p>
                <p>PEGA9812983H</p>
                <p><b>RFC</b></p>
                <p>GAPE983H</p>
                <div class="cont_btns_card_c">
                    <button class="btn_primario btn_card_c">IVA</button>
                    <button class="btn_primario btn_card_c">ISR</button>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="../../public/img/calculadora.png" alt="error">
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
    <script src="../../public/js/detalles.js"></script>
</body>
</html>