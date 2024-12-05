<?php

$conn = mysqli_connect("localhost", "lucas", "database123?", "proyecto_nike");


if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_POST['submit'])) {

        $title = $_POST['title'];
        $imagen = $_POST['imagen'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];
        $cantidad = $_POST['cantidad'];

        $sql = "UPDATE productos SET title = ?, imagen = ?, descripcion = ?, precio = ?, categoria = ?, cantidad = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssi", $title, $imagen, $descripcion, $precio, $categoria, $cantidad, $id);


        if ($stmt->execute()) {
        
            header("Location: productosadmin.php?status=success");
            exit;
        } else {
            
            echo "<p class='text-red-500'>Error al actualizar el producto: " . $stmt->error . "</p>";
        }

        $stmt->close();
    }
}


$conn->close();
?>
