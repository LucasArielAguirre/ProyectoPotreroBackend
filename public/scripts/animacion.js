document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 1000,   // Duración de la animación
        once: false,       // Ejecutar solo la primera vez
        mirror: true,    // Si debe reflejarse en la vista inversa del scroll
    });
});
