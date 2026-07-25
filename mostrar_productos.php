<?php

require 'conexion.php';

$sql = "SELECT * FROM PRODUCTO";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id_producto"] . " - Nombre: " . $fila["nombre"] . " - Descripción: " . $fila["descripcion"] . " - Precio: " . $fila["precio"] . " - Stock: " . $fila["stock"] . "<br><br>";
    } 
} else { 
    echo "No se encontraron productos.";
}

$conn->close();
?>