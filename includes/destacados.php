<section class="w-full bg-black flex flex-col justify-center items-center pt-10 pb-10">
    <h1 class="text-white text-center text-4xl md:text-6xl underline mb-6">Productos destacados</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mx-auto px-4">
        <?php
        $conexion = mysqli_connect("localhost", "lucas", "database123?", "proyecto_nike");

        $query = "SELECT * FROM productos LIMIT 6";
        $resultado = mysqli_query($conexion, $query);

        while ($unaFila = mysqli_fetch_assoc($resultado)) {
            $imagen = htmlspecialchars($unaFila['imagen']);
            $titulo = htmlspecialchars($unaFila['title']);
            $descripcion = htmlspecialchars($unaFila['descripcion']);
            $precio = htmlspecialchars($unaFila['precio']);

            echo '
                    <div class="bg-neutral-900/40 text-white rounded-md shadow-lg p-4 border border-red-600/40 w-full md:w-72 mx-auto hover:scale-105 transition-all ">
                        <img src="' . $imagen . '" alt="' . $titulo . '" class="w-full h-40 object-cover rounded-md">
                        <h1 class="text-lg font-bold mt-4 text-center">' . $titulo . '</h1>
                        <p class="text-sm text-gray-400 mt-2 text-center">' . $descripcion . '</p>
                        <hr class="my-2 border-gray-700">
                        <div class="flex justify-between items-center mt-4">
                            <h3 class="text-red-400 text-xl font-semibold">$' . $precio . '</h3>
                            <button class="bg-red-600 hover:bg-red-800 text-white rounded-full p-3 shadow-md hover:scale-105 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1a1 1 0 0 0 1 1a1 1 0 0 0 1-1a1 1 0 0 0-1-1M18 6H4.27l2.55 6H15c.33 0 .62-.16.8-.4l3-4c.13-.17.2-.38.2-.6a1 1 0 0 0-1-1m-3 7H6.87l-.77 1.56L6 15a1 1 0 0 0 1 1h11v1H7a2 2 0 0 1-2-2a2 2 0 0 1 .25-.97l.72-1.47L2.34 4H1V3h2l.85 2H18a2 2 0 0 1 2 2c0 .5-.17.92-.45 1.26l-2.91 3.89c-.36.51-.96.85-1.64.85"/>
                                </svg>
                            </button>
                        </div>
                    </div>';
        }

        mysqli_close($conexion);
        ?>
    </div>
    </section>