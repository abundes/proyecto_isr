 // Función para manejar el clic en los enlaces
 function handleLinkClick(event, linkId, destination) {
    event.preventDefault(); // Previene el comportamiento predeterminado del enlace

    // Agrega una clase para iniciar la animación de salida
    document.getElementById(linkId).classList.add('salida');

    // Espera a que termine la animación antes de redirigir
    setTimeout(function() {
      window.location.href = destination;
    }, 500); // 500 milisegundos, ajusta según la duración de la animación
  }

  // Agrega eventos para cada enlace
  document.getElementById('enlace1').addEventListener('click', function(event) {
    handleLinkClick(event, 'enlace1', 'calculadoraIVA.php');
  });

  document.getElementById('enlace2').addEventListener('click', function(event) {
    handleLinkClick(event, 'enlace2', 'calculadoraISR.php');
  });

  document.getElementById('enlace3').addEventListener('click', function(event) {
    handleLinkClick(event, 'enlace3', 'contribuyentes.php');
  });