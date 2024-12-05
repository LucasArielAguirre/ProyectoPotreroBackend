<section class="w-full h-screen flex items-center justify-center flex-col">
        <h1 class="text-red-100 text-2xl mb-3 md:text-4xl uppercase ">Tu marca favorita en calzado</h1>
        <div class="relative w-full max-w-7xl h-screen overflow-hidden rounded-lg just shadow-2xl shadow-red-600/40">
         
            <div id="slider" class="flex transition-transform duration-700 ease-out">
               
                <div class="w-full flex-shrink-0">
                    <img src="public/img/Phantom.jpg" alt="Slide 1" class="w-full md:h-screen h-screen object-cover">
                    <div
                        class="absolute bottom-1/4 left-1/2 transform -translate-x-1/2 text-white text-center text-4xl font-bold shadow-lg">
                        <h1 class="text-orange-300 text-center">NIKE</h1>
                        <h3>Phantom</h3>
                        <h5 class="text-sm">Máxima precisíon</h5>
                    </div>

                </div>
           
                <div class="w-full flex-shrink-0 relative">
                    <img src="public/img/carrusel2.webp" alt="Slide 2" class="w-full md:h-screen h-screen object-cover">
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center text-white text-center z-20 shadow-lg">
                        <h1 class="text-orange-300 text-7xl md:text-6xl font-bold mb-2">NIKE EXPERIENCES</h1>
                        <h5 class="text-xl md:text-2xl">Súmate a las experiencias exclusivas.</h5>
                    </div>
                </div>
            
            </div>


            <button id="prevBtn"
                class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white bg-black/50 hover:bg-black/70 p-2 rounded-full">
                &#10094;
            </button>
            <button id="nextBtn"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white bg-black/50 hover:bg-black/70 p-2 rounded-full">
                &#10095;
            </button>

         
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100"
                    onclick="setCurrentSlide(0)"></button>
                <button class="w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100"
                    onclick="setCurrentSlide(1)"></button>

            </div>
    </section>