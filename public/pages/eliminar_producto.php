<?php

$conn = mysqli_connect("localhost", "lucas", "database123?", "proyecto_nike");


if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "DELETE FROM productos WHERE id = ?";


    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {

        header("Location: productosadmin.php?status=success");
        exit;
    } else {

        echo "<p class='text-red-500'>Error al eliminar el producto: " . $stmt->error . "</p>";
    }

    $stmt->close();
}


$conn->close();
?>
