

document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const slider = document.getElementById('slider');
    const slides = slider ? slider.children : [];
    const totalSlides = slides.length;
    let currentIndex = 0;
    let timer;


    function showSlide(index) {
        if (slider) {
          
            slider.style.transform = `translateX(-${index * 100}%)`;
            currentIndex = index;
        }
    }

    // Mostrar el siguiente slide automáticamente
    function nextSlide() {
        const newIndex = (currentIndex + 1) % totalSlides;
        showSlide(newIndex);
    }


    function prevSlide() {
        const newIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        showSlide(newIndex);
    }


    function startTimer() {
       
        if (!timer) {
            timer = setInterval(nextSlide, 5000); 
        }
    }

    // Reiniciar el temporizador
    function resetTimer() {
        clearInterval(timer);
        timer = null;
        startTimer();
    }

    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            resetTimer(); 
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
            resetTimer();
        });
    }

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }


    if (totalSlides > 0) {
        showSlide(currentIndex); 
        startTimer();
    }
});
