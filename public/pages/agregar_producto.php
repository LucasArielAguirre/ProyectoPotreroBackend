<?php

$conn = new mysqli("localhost", "lucas", "database123?", "proyecto_nike");


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];   
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $cantidad = $_POST['cantidad'];


    if (empty($title) || empty($imagen) || empty($descripcion) || empty($precio) || empty($categoria) || empty($cantidad)) {
        echo "<p class='text-red-500'>Todos los campos son requeridos.</p>";
    } 

    elseif (!filter_var($imagen, FILTER_VALIDATE_URL)) {
        echo "<p class='text-red-500'>La URL de la imagen no es válida.</p>";
    }
    elseif (!is_numeric($precio) || $precio <= 0) {
        echo "<p class='text-red-500'>El precio debe ser un número positivo.</p>";
    } 

    elseif (!is_numeric($cantidad) || $cantidad < 0) {
        echo "<p class='text-red-500'>La cantidad debe ser un número no negativo.</p>";
    } 
    else {

        $stmt = $conn->prepare("INSERT INTO productos (title, imagen, descripcion, precio, categoria, cantidad) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $title, $imagen, $descripcion, $precio, $categoria, $cantidad);

        if ($stmt->execute()) {
            header("Location: productosadmin.php?status=success");
            exit;
        } else {

            echo "<p class='text-red-500'>Error al agregar el producto: " . $stmt->error . "</p>";
        }


        $stmt->close();
    }
}


$conn->close();
?>
