<?php

require 'conexion.php';

$id_cliente = $_POST['id_cliente'];
$id_producto = $_POST['id_producto'];
$cantidad = $_POST['cantidad'];

$sql = "INSERT INTO COMPRA (cantidad, id_producto, id_cliente)
VALUES ('$cantidad', '$id_producto', '$id_cliente')";

if ($conn->query($sql) === TRUE) {
    echo "Compra registrada con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>