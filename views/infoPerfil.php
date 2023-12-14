<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <title>Formulario</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- Enlaza la biblioteca Font Awesome -->
  <link rel="stylesheet" href="css/infContador.css" />
  <!-- Enlaza tu archivo de estilos CSS -->
</head>

<body>
  <div class="container">
    <i class="fas fa-user user-icon"></i>
    <form action="formularioDatos" method="POST" class="user-form">
      <div class="column">
        <!-- Icono de usuario -->
        <div class="form-group text-right">
          <label for="nombre" class="label-izquierdo">Nombre completo:</label>
          <input type="text" id="Nombre" name="Nombre" value="Panfilo Pérez Garcia" />
        </div>
        <!-- Resto de tu formulario -->
        <div class="form-group text-right">
          <label class="label-izquierdo" for="clave">Clave de contador:</label>
          <input type="text" id="clave" name="clave" value="57221900134" />
        </div>
      </div>

      <div class="column">
        <div class="form-group">
          <label class="label-derecha" for="Correo">Correo Electronico:</label>
          <input type="text" id="Correo" name="Correo" value="57221900134@utrng.edu.mx" />
        </div>
        <div class="form-group">
          <label class="label-derecha" for="contribuyente">Número de contribuyente:</label>
          <input type="text" id="contribuyente" name="contribuyente" value="1" />
        </div>
        <button id="botonEditarPerfil" class="buttonEdiPerfil">
          Editar perfil
        </button>
      </div>
    </form>
  </div>

  <div class="container2">
    <form id="formularioDatos" class="formularioDatos" action="infContador.html" method="post">
      <label for="opcion">Selecciona una opción:</label>
      <select id="opcion" name="opcion">
        <option value="datos_usuario">Datos del Usuario</option>
        <option value="cambio_contraseña">Cambio de Contraseña</option>
      </select>

      <div id="datos_usuario" class="opciones-formulario">
        <h2>Datos del Usuario</h2>
        <div>
          <label for="sexo">Sexo:</label>
          <select id="sexo" name="sexo">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
          </select>
        </div>
        <div>
          <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
          <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" />
        </div>
      </div>

      <div id="cambio_contraseña" class="opciones-formulario" style="display: none">
        <h2>Cambio de Contraseña</h2>
        <div>
          <label for="contraseña_actual">Contraseña Actual:</label>
          <input type="password" id="contraseña_actual" name="contraseña_actual" />
        </div>
        <div>
          <label for="nueva_contraseña">Nueva Contraseña:</label>
          <input type="password" id="nueva_contraseña" name="nueva_contraseña" />
        </div>
        <div>
          <label for="confirmar_contraseña">Confirmar Contraseña:</label>
          <input type="password" id="confirmar_contraseña" name="confirmar_contraseña" />
        </div>
        <input class="buttonEvnviarD" type="submit" value="Enviar" />
      </div>
    </form>

    <button class="back-button" onclick="window.location.href='index.html'">
      Regresar a la página principal
    </button>
  </div>
  <script src="js/InfContador.js"></script>
</body>

</html>