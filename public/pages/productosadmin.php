<?php
$conn = mysqli_connect("localhost", "lucas", "database123?", "proyecto_nike");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Función para mostrar productos en la tabla
function mostrarProductosAdmin($conn) {
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = htmlspecialchars($row['id']);
            $imagen = htmlspecialchars($row['imagen']);
            $titulo = htmlspecialchars($row['title']);
            $descripcion = htmlspecialchars($row['descripcion']);
            $precio = htmlspecialchars($row['precio']);
            $categoria = htmlspecialchars($row['categoria']);

            echo "
            <tr class='text-center'>
                <td class='p-3'>$id</td>
                <td class='p-3'><img src='$imagen' alt='$titulo' class='w-16 h-16 object-cover rounded-md'></td>
                <td class='p-3'>$titulo</td>
                <td class='p-3'>$descripcion</td>
                <td class='p-3'>$$precio</td>
                <td class='p-3'>$categoria</td>
             <td class='p-3 flex md:flex-row flex-col sm:flex-row gap-4 justify-center my-5'>
        <a href='formulario_editar_producto.php?id=$id' class='bg-blue-500 hover:bg-blue-700 text-white px-3 py-1 rounded sm:mb-0 sm:mr-2'>
            Editar
        </a>
        <a href='eliminar_producto.php?id=$id' class='bg-red-500 hover:bg-red-700 text-white px-3 py-1 rounded'>
            Eliminar
        </a>
    </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='7' class='text-center text-gray-500 p-4'>No hay productos disponibles.</td></tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Productos - Proyecto Nike</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="bg-black text-white overflow-x-hidden">
    <?php include '../../includes/navadmin.php'; ?>

    <header class="bg-black text-white py-6 mt-12 text-center">
        <h1 class="text-4xl font-bold my-2">ADMINISTRAR PRODUCTOS</h1>
    </header>

    <main class="container mx-auto mt-6 px-4">
        <section class="mb-6">
            <button class="px-4 py-2 bg-green-300 hover:bg-green-800 transition-all hover:scale-105 my-4 mx-auto block">
                <a href="/proyecto/public/pages/formulario_agregar_producto.php" class="text-black font-semibold">
                    AGREGAR PRODUCTO
                </a>
            </button>
            <div class="overflow-x-auto">
                <table class="w-full sm:table-fixed text-sm bg-neutral-900/40 text-white border border-gray-700 rounded-md">
                    <thead>
                        <tr class="bg-red-600 text-white text-center text-xs sm:text-sm">
                            <th class="p-2 sm:p-3">ID</th>
                            <th class="p-2 sm:p-3">IMAGEN</th>
                            <th class="p-2 sm:p-3">TÍTULO</th>
                            <th class="p-2 sm:p-3">DESCRIPCIÓN</th>
                            <th class="p-2 sm:p-3">PRECIO</th>
                            <th class="p-2 sm:p-3">CATEGORÍA</th>
                            <th class="p-2 sm:p-3">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php mostrarProductosAdmin($conn); ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <div class="w-screen h-auto m-0 p-0">
        <?php include '../../includes/experiences.php'; ?>
        <?php include '../../includes/footer.php'; ?>
    </div>

    <script src="../scripts/index.js"></script>
</body>
</html>
