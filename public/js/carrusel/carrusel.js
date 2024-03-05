// Configuración del carrusel
let currentSlide = 0;
const slides = document.querySelectorAll('.carrusel-slide');

// Función para mostrar el siguiente slide
function showNextSlide() {
    slides[currentSlide].style.display = 'none';
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].style.display = 'block';
}

// Configura el carrusel para avanzar automáticamente cada 3 segundos (ajusta el tiempo según tus preferencias)
setInterval(showNextSlide, 1395);