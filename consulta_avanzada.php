<?php

require 'conexion.php';

$sql = "SELECT
CLIENTE.nombre,
COUNT(COMPRA.id_compra) AS numero_compras
FROM CLIENTE
INNER JOIN COMPRA
ON CLIENTE.id_cliente = COMPRA.id_cliente
GROUP BY CLIENTE.nombre
HAVING COUNT(COMPRA.id_compra) > 2";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {

    while($fila = $resultado->fetch_assoc()) {

        echo "Cliente: " . $fila["nombre"] .
        " - Número de compras: " .
        $fila["numero_compras"] . "<br>";

    }

} else {

    echo "No se encontraron datos.";

}

$conn->close();

?>