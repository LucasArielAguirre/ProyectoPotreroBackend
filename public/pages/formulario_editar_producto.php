<?php
// Establecer conexión con la base de datos
$conn = mysqli_connect("localhost", "lucas", "database123?", "proyecto_nike");

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Obtener el ID del producto desde la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos del producto
    $sql = "SELECT * FROM productos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $producto = $result->fetch_assoc();

    // Si el producto no existe, redirigir a la página de administración
    if (!$producto) {
        header("Location: administrar_productos.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto - Proyecto Nike</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="bg-black text-gray-200">

<?php include '../../includes/nav.php'; ?>

<header class="bg-black text-white py-6 mt-12">
    <h1 class="text-4xl text-center font-bold my-2">EDITAR PRODUCTO</h1>
</header>

<main class="container mx-auto mt-6">
    <section class="mb-6">
        <div class="bg-black p-6 rounded-md border border-gray-700 shadow-lg">
            <h2 class="text-2xl font-bold text-center text-red-600 mb-4">Editar Producto</h2>
            <form action="editar_producto.php?id=<?php echo $producto['id']; ?>" method="POST" class="grid grid-cols-1 gap-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="title" class="block mb-2 text-sm text-gray-300">Título</label>
                        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($producto['title']); ?>" required
                            class="w-full p-3 border rounded bg-black text-gray-200 border-gray-600 focus:ring focus:ring-red-600">
                    </div>
                    <div>
                        <label for="precio" class="block mb-2 text-sm text-gray-300">Precio</label>
                        <input type="number" step="0.01" id="precio" name="precio" value="<?php echo htmlspecialchars($producto['precio']); ?>" required
                            class="w-full p-3 border rounded bg-black text-gray-200 border-gray-600 focus:ring focus:ring-red-600">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="categoria" class="block mb-2 text-sm text-gray-300">Categoría</label>
                        <select id="categoria" name="categoria" required
                            class="w-full p-3 border rounded bg-black text-gray-200 border-gray-600 focus:ring focus:ring-red-600">
                            <option value="hombre" <?php echo ($producto['categoria'] == 'hombre' ? 'selected' : ''); ?>>Hombre</option>
                            <option value="mujer" <?php echo ($producto['categoria'] == 'mujer' ? 'selected' : ''); ?>>Mujer</option>
                            <option value="niños" <?php echo ($producto['categoria'] == 'niños' ? 'selected' : ''); ?>>Niños</option>
                        </select>
                    </div>
                    <div>
                        <label for="cantidad" class="block mb-2 text-sm text-gray-300">Cantidad</label>
                        <input type="number" id="cantidad" name="cantidad" value="<?php echo htmlspecialchars($producto['cantidad']); ?>" required
                            class="w-full p-3 border rounded bg-black text-gray-200 border-gray-600 focus:ring focus:ring-red-600">
                    </div>
                    <div>
                        <label for="imagen" class="block mb-2 text-sm text-gray-300">Imagen</label>
                        <input type="url" id="imagen" name="imagen" value="<?php echo htmlspecialchars($producto['imagen']); ?>" required
                            class="w-full p-3 border rounded bg-black text-gray-200 border-gray-600 focus:ring focus:ring-red-600">
                    </div>
                </div>
                <div>
                    <label for="descripcion" class="block mb-2 text-sm text-gray-300">Descripción</label>
                    <textarea id="descripcion" name="descripcion" rows="4" required
                        class="w-full p-3 border rounded bg-black text-gray-200 border-gray-600 focus:ring focus:ring-red-600"><?php echo htmlspecialchars($producto['descripcion']); ?></textarea>
                </div>
                <button type="submit" name="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-gray-200 py-3 rounded-md shadow-md hover:shadow-lg transition">
                    Actualizar Producto
                </button>
            </form>
        </div>
    </section>
</main>

</body>
</html>
