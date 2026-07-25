<?php

require 'conexion.php';

$sql = "SELECT * FROM COMPRA";
$resultado = $conn->query($sql);
if ($resultado->num_rows > 0){
    while($fila = $resultado->fetch_assoc()) {
        echo "ID:" . $fila["id_compra"] . " - Cantidad: " . $fila["cantidad"] . " - Total: " . $fila["total"] . " - Fecha: " . $fila["fecha"] . "<br><br>";
    } 
} else {
    echo "No se encontraron clientes.";
};
$conn->close();
?>