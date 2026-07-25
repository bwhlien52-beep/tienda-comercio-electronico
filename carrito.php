<?php
session_start();
$productos = [
    ['id'=>1, 'nombre'=>'Mouse Gamer', 'precio'=>'7900'],
    ['id'=>2, 'nombre'=>'Audífonos Bluetooth', 'precio'=>'18500'],
    ['id'=>3, 'nombre'=>'Monitor Samsung', 'precio'=>'99990'],
    ['id'=>4, 'nombre'=>'Notebook Lenovo', 'precio'=>'350990'],
    ['id'=>5, 'nombre'=>'Teclado Mecánico', 'precio'=>'15790'],
    ['id'=>6, 'nombre'=>'PC Gamer', 'precio'=>'500990'],
    ['id'=>7, 'nombre'=>'Samsung Galaxy A50', 'precio'=>'345990'],
];
if (empty($_SESSION['carrito'])) {
    echo "El carrito está vacío";
} else {
    foreach ($_SESSION['carrito'] as $productoId => $cantidad) {
        foreach ($productos as $producto) {
            if ($producto['id'] == $productoId) {
                echo "Producto: " . $producto['nombre'];
                echo "<br>";

                echo "Precio: $" . $producto['precio'];
                echo "<br>";

                echo "Cantidad: " . $cantidad;
                echo "<br>";

                echo "<a href='eliminar_prod.php?id=" . $productoId . "'>Eliminar</a>";
                echo "<br><br>";
            }
        }
        
    }
}
?>