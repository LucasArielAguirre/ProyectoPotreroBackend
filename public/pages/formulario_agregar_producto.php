<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto - Proyecto Nike</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-black text-gray-200">


    <section class="container mx-auto mt-8">
        <div class="bg-black p-6 rounded-md border border-gray-700 shadow-lg">
            <h2 class="text-2xl font-bold text-center text-red-600 mb-4">Agregar Producto</h2>
            <form action="agregar_producto.php" method="POST" enctype="multipart/form-data"
                class="grid grid-cols-1 gap-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="title" class="block mb-2 text-sm text-gray-300">Título</label>
                        <input type="text" id="title" name="title" required
                            class="w-full p-3 border rounded bg-black text-gray-200 border-gray-600 focus:ring focus:ring-red-600">
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm text-gray-300">Precio</label>
                        <input type="number" step="0.01" id="precio" name="precio" required
                            class="w-full p-3 border rounded bg-black text-gray-200 border-gray-600 focus:ring focus:ring-red-600">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="category" class="block mb-2 text-sm text-gray-300">Categoría</label>
                        <select id="categoria" name="categoria" required
                            class="w-full p-3 border rounded bg-black text-gray-200 border-gray-600 focus:ring focus:ring-red-600">
                            <option value="hombre">Hombre</option>
                            <option value="mujer">Mujer</option>
                            <option value="niños">Niños</option>
                        </select>
                    </div>
                    <div>
                        <label for="cantidad" class="block mb-2 text-sm text-gray-300">Cantidad</label>
                        <input type="number" id="cantidad" name="cantidad" required
                            class="w-full p-3 border rounded bg-black text-gray-200 border-gray-600 focus:ring focus:ring-red-600">
                    </div>
                    <div>
                        <label for="image" class="block mb-2 text-sm text-gray-300">Imagen</label>
                        <input type="url" id="imagen" name="imagen" required placeholder="Ingrese una URL de la imagen"
                            class="w-full p-3 border rounded bg-black text-gray-200 border-gray-600 focus:ring focus:ring-red-600">
                    </div>
                </div>
                <div>
                    <label for="description" class="block mb-2 text-sm text-gray-300">Descripción</label>
                    <textarea id="descripcion" name="descripcion" rows="4" required
                        class="w-full p-3 border rounded bg-black text-gray-200 border-gray-600 focus:ring focus:ring-red-600"></textarea>
                </div>
                <button type="submit" name="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-gray-200 py-3 rounded-md shadow-md hover:shadow-lg transition">
                    Agregar Producto
                </button>
            </form>
        </div>
    </section>

    <footer class="bg-gray-900 text-gray-500 text-center py-4 mt-8">
        <p>© 2024 Proyecto Nike. Todos los derechos reservados.</p>
    </footer>

</body>

</html>