// JavaScript para mostrar el formulario correspondiente según la opción seleccionada
const select = document.getElementById('opcion');
const opcionesFormulario = document.querySelectorAll('.opciones-formulario');

select.addEventListener('change', function() {
  opcionesFormulario.forEach(opcion => {
    if (opcion.id === select.value) {
      opcion.style.display = 'block';
    } else {
      opcion.style.display = 'none';
    }
  });
});

// Obtener referencia al botón "Editar perfil" y al formularioDatos
const botonEditarPerfil = document.getElementById('botonEditarPerfil');
const formularioDatos = document.getElementById('formularioDatos');

// Variable para controlar el estado del formulario
let visible = false;

// Agregar un evento al botón "Editar perfil"
botonEditarPerfil.addEventListener('click', function(event) {
  event.preventDefault(); // Evitar el envío del formulario por defecto
  
  // Alternar la visibilidad del formularioDatos
  formularioDatos.style.display = visible ? 'none' : 'block';
  
  // Actualizar el estado del formulario
  visible = !visible;
});

