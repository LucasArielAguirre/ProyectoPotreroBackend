<?php

$conn = mysqli_connect("localhost", "lucas", "database123?", "proyecto_nike");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

function mostrarProductos($categoria, $conn) {
    $sql = ($categoria === 'general') 
        ? "SELECT * FROM productos" 
        : "SELECT * FROM productos WHERE categoria = '$categoria'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 mx-auto px-4'>";
        while ($row = $result->fetch_assoc()) {
            $imagen = htmlspecialchars($row['imagen']);
            $titulo = htmlspecialchars($row['title']);
            $descripcion = htmlspecialchars($row['descripcion']);
            $precio = htmlspecialchars($row['precio']);

            echo '<div class="bg-neutral-900/40 text-white rounded-md shadow-lg p-4 border border-red-600/40 hover:scale-105 transition-all">
                        <img src="' . $imagen . '" alt="' . $titulo . '" class="w-full h-40 object-cover rounded-md">
                        <h1 class="text-lg font-bold mt-4 text-center">' . $titulo . '</h1>
                        <p class="text-sm text-gray-400 mt-2 text-center">' . $descripcion . '</p>
                        <hr class="my-2 border-gray-700">
                        <div class="flex justify-between items-center mt-4">
                            <h3 class="text-red-400 text-xl font-semibold">$' . number_format( $precio, 2) . '</h3>
                            <button class="bg-red-600 hover:bg-red-800 text-white rounded-full p-3 shadow-md hover:scale-105 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1a1 1 0 0 0 1 1a1 1 0 0 0 1-1a1 1 0 0 0-1-1M18 6H4.27l2.55 6H15c.33 0 .62-.16.8-.4l3-4c.13-.17.2-.38.2-.6a1 1 0 0 0-1-1m-3 7H6.87l-.77 1.56L6 15a1 1 0 0 0 1 1h11v1H7a2 2 0 0 1-2-2a2 2 0 0 1 .25-.97l.72-1.47L2.34 4H1V3h2l.85 2H18a2 2 0 0 1 2 2c0 .5-.17.92-.45 1.26l-2.91 3.89c-.36.51-.96.85-1.64.85"/>
                                </svg>
                            </button>
                        </div>
                  </div>';
        }
        echo "</div>";
    } else {
        echo "<p class='text-gray-600 text-center'>No hay productos disponibles en esta categoría.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secciones de Productos</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="bg-black text-gray-800">
<?php include '../../includes/nav.php'; ?>
    <header class="bg-black text-white py-6 mt-12">
        <h1 class="text-3xl text-center font-bold">PRODUCTOS</h1>
    </header>
<?php include '../../includes/experiences.php';?>

    <main class="container mx-auto flex flex-col md:flex-row mt-6">


        <aside class="md:w-1/4 bg-white p-6 rounded-md text-black mb-6 md:mb-0 md:mr-4 h-96   ">
            <h2 class="text-xl font-semibold mb-4">Categorías</h2>
            <ul class="space-y-2">
                <li class="list-none hover:list-disc" ><a href="?categoria=hombre" class="block p-2 hover:border border-gray-900 hover:bg-red-600 rounded">Hombre</a></li>
                <li class="list-none hover:list-disc"><a href="?categoria=mujer" class="block p-2 hover:border border-gray-900 hover:bg-red-600 rounded">Mujer</a></li>
                <li class="list-none hover:list-disc"><a href="?categoria=niños" class="block p-2 hover:border border-gray-900 hover:bg-red-600 rounded">Niños</a></li>
                <li class="list-none hover:list-disc"><a href="?categoria=general" class="block p-2 hover:border border-gray-900 hover:bg-red-600 rounded">Todos</a></li>
            </ul>
        </aside>


        <section class="md:w-3/4">
            <?php
                $categoria = isset($_GET['categoria']) ? $_GET['categoria'] : 'general';
                mostrarProductos($categoria, $conn);
            ?>
        </section>
    </main>
    <script src="../scripts/index.js"></script>

    </body>
    </html>