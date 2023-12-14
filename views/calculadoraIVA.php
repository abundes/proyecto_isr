<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IVA</title>
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
            <a href="../views/calculadoraISR.php">CALCULADORA ISR</a>
            <a class="activo" href="../views/calculadoraIVA.php">CALCULADORA IVA</a>
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
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo del Impuesto al Valor Agregado</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        #app {
            max-width: 900px;
            margin: 0 auto;
        }
        .header-icons {
            color: #4CAF50;
        }
        .table-row {
            background-color: #f2f2f2;
        }
        .table-header {
            background-color: #333;
            color: white;
        }
        .accordion-button {
            background-color: #333;
            color: white;
        }
        .input-field {
            background-color: #e7e7e7;
            border: none;
            padding: 8px;
        }
        .button-green {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
        }
    </style>
    <script>
        let products = [];

        // Cargar datos desde localStorage al cargar la página
        function loadProducts() {
            const storedProducts = localStorage.getItem('products');
            if (storedProducts) {
                products = JSON.parse(storedProducts);
                displayProducts();
            }
        }

        function saveProducts() {
            localStorage.setItem('products', JSON.stringify(products));
        }

        function toggleAccordion(id) {
            let element = document.getElementById(id);
            if (element.classList.contains('hidden')) {
                element.classList.remove('hidden');
            } else {
                element.classList.add('hidden');
            }
        }

        function addProduct() {
            // Function to add a product to the table
            const productName = document.querySelector('#product-name').value;
            const productPrice = parseFloat(document.querySelector('#product-price').value);
            const vatRate = parseFloat(document.querySelector('#vat-rate').value);
            const personName = document.querySelector('#person-name').value;
            const productVatAmount = productPrice * (vatRate / 100);
            const productTotalAmount = productPrice + productVatAmount;

            products.push({
                productName: productName,
                productPrice: productPrice,
                vatRate: vatRate,
                personName: personName,
                productVatAmount: productVatAmount,
                productTotalAmount: productTotalAmount,
            });

            displayProducts();
            saveProducts();

            // Limpiar campos después de agregar producto
            document.querySelector('#person-name').value = '';
            document.querySelector('#product-name').value = '';
            document.querySelector('#product-price').value = '';
            document.querySelector('#vat-rate').value = '';
        }

        function displayProducts() {
            const productList = document.getElementById('product-list');
            productList.innerHTML = '';

            products.forEach((product, index) => {
                const row = `
                    <tr class="table-row">
                        <td>${product.personName}</td>
                        <td>${product.productName}</td>
                        <td>$${product.productPrice.toFixed(2)}</td>
                        <td>${product.vatRate}%</td>
                        <td>$${product.productVatAmount.toFixed(2)}</td>
                        <td>$${product.productTotalAmount.toFixed(2)}</td>
                        <td>
                            <button class="button-green" onclick="editProduct(${index})">Editar</button>
                            <button class="button-green" onclick="deleteProduct(${index})">Eliminar</button>
                        </td>
                    </tr>
                `;
                productList.innerHTML += row;
            });
        }

        function editProduct(index) {
            // Function to edit a product
            const product = products[index];
            document.querySelector('#person-name').value = product.personName;
            document.querySelector('#product-name').value = product.productName;
            document.querySelector('#product-price').value = product.productPrice;
            document.querySelector('#vat-rate').value = product.vatRate;

            products.splice(index, 1); // Remove the product from the list
            displayProducts();
            saveProducts();
        }

        function deleteProduct(index) {
            // Function to delete a product
            products.splice(index, 1);
            displayProducts();
            saveProducts();
        }

        function printTable() {
            // Function to trigger printing the table
            window.print();
        }

        // Cargar datos al cargar la página
        window.addEventListener('DOMContentLoaded', () => {
            loadProducts();
        });
    </script>
</head>
<body>
    <div id="app">
        <h2 class="text-3xl font-bold mt-4 mb-2">CÁLCULO DEL IMPUESTO AL VALOR AGREGADO</h2>
        <div class="accordion p-4">
            <button class="accordion-button p-2 w-full text-left text-xl" onclick="toggleAccordion('personal-data')">Datos de la persona</button>
            <div id="personal-data" class="hidden">
                <input type="text" class="input-field w-full my-2" id="person-name" placeholder="NOMBRE COMPLETO">
                <input type="text" class="input-field w-full my-2" placeholder="R.F.C">
                <input type="text" class="input-field w-full my-2" placeholder="C.U.R.P">
            </div>

            <button class="accordion-button p-2 w-full text-left text-xl mt-4" onclick="toggleAccordion('product-data')">Datos a calcular</button>
            <div id="product-data" class="hidden">
                <input type="text" class="input-field w-2/5 my-2" id="product-name" placeholder="NOMBRE DEL PRODUCTO">
                <input type="number" class="input-field w-1/5 my-2" id="product-price" placeholder="PRECIO">
                <input type="number" class="input-field w-1/5 my-2" id="vat-rate" placeholder="%">
                <button class="button-green" onclick="addProduct()">Agregar</button>
            </div>
        </div>

        <div class="table-responsive p-4">
            <table class="w-full text-left">
                <thead class="table-header">
                    <tr>
                        <th>NOMBRE DEL PERSONA</th>
                        <th>NOMBRE DEL PRODUCTO</th>
                        <th>PRECIO</th>
                        <th>IVA (%)</th>
                        <th>IVA</th>
                        <th>TOTAL</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody id="product-list">
                    <!-- Product rows will be added here -->
                </tbody>
            </table>
        </div>

        <button class="button-green w-full py-4 text-xl" onclick="printTable()">Imprimir tabla</button>
    </div>
</body>
</html>

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
    
    <script>
         var datosFicticios = [
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
            { d1: "nombre_producto", d2: 0.0, d3: 3.2 ,botones:"" },
        ];

        function generarFilasTabla(datos) {
            var tbody = document.getElementById('miTabla').getElementsByTagName('tbody')[0];

            datos.forEach(function (dato) {
                var fila = tbody.insertRow();
                var celdas = Object.values(dato);

                celdas.forEach(function (valor, index) {
                    var celda = fila.insertCell();

                    // Verificar si la celda actual es la última (acciones)
                    if (index === celdas.length -1 ) {
                        var botonEditar = document.createElement('button');
                        botonEditar.classList.add('btn-second');
                        botonEditar.textContent = 'Editar';
                        botonEditar.addEventListener('click', function() {
                            // Lógica para editar la fila
                            alert('Editar fila con Nombre ' + fila.cells[0].textContent);
                        });

                        var botonEliminar = document.createElement('button');
                        botonEliminar.classList.add('btn-third');
                        botonEliminar.textContent = 'Eliminar';
                        botonEliminar.addEventListener('click', function() {
                            // Lógica para eliminar la fila
                            alert('Eliminar fila con Nombre ' + fila.cells[0].textContent);
                        });

                        celda.appendChild(botonEditar);
                        celda.appendChild(botonEliminar);
                    } else {
                        // Si no es la última celda, simplemente establecer el contenido
                        celda.textContent = valor;
                    }
                });
            });
        }

        // Llamar a la función después de que la página se haya cargado
        window.addEventListener('load', function() {
            generarFilasTabla(datosFicticios);
        });
    </script>
</body>
</html>