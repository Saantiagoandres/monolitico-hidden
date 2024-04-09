// Variables globales
var currentIndex = 0; // Índice de la imagen actual
var intervalId; // ID del intervalo para el carrusel automático
var intervalTime = 5000; // Tiempo en milisegundos entre cada cambio de imagen

// Función para mostrar la siguiente imagen
function nextSlide() {
  var carousel = document.getElementById('carousel');
  var images = carousel.getElementsByTagName('img');

  currentIndex++;
  if (currentIndex >= images.length) {
    currentIndex = 0; // Vuelve a la primera imagen si llega al final
  }

  showSlide();
}

// Función para mostrar la imagen anterior
function prevSlide() {
  var carousel = document.getElementById('carousel');
  var images = carousel.getElementsByTagName('img');

  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = images.length - 1; // Va a la última imagen si está en la primera
  }

  showSlide();
}

// Función para mostrar la imagen actual según el índice
function showSlide() {
  var carousel = document.getElementById('carousel');
  var images = carousel.getElementsByTagName('img');

  for (var i = 0; i < images.length; i++) {
    images[i].style.display = 'none'; // Oculta todas las imágenes
  }

  images[currentIndex].style.display = 'block'; // Muestra la imagen actual
}

// Función para iniciar el carrusel automático
function startCarousel() {
  intervalId = setInterval(nextSlide, intervalTime);
}

// Función para detener el carrusel automático
function stopCarousel() {
  clearInterval(intervalId);
}

// Llamar a la función una vez que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
  showSlide();
  startCarousel(); // Iniciar el carrusel automático al cargar la página
});
