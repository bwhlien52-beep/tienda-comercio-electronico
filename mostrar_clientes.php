<?php

require 'conexion.php';

$sql = "SELECT * FROM CLIENTE";
$resultado = $conn->query($sql);
if ($resultado->num_rows > 0){
    while($fila = $resultado->fetch_assoc()) {
        echo "ID:" . $fila["id_cliente"] . " - Nombre: " . $fila["nombre"] . " - Email: " . $fila["email"] . " - Dirección: " . $fila["direccion"] . "<br><br>";
    } 
} else {
    echo "No se encontraron clientes.";
};
$conn->close();
?>