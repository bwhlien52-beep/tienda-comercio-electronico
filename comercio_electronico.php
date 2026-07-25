<?php
session_start();
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="styles.css"> 
<title>Tienda de Comercio Electrónico</title> 
</head> 
<body> 
    <h1>Tienda de Comercio Electrónico</h1>
<div class="search-container"> 
<input type="text" id="product-search" placeholder="Buscar producto">  
<button onclick="searchProducts()">Buscar</button> <br><br>
<?php
$productos = [
    ['id'=>1, 'nombre'=>'Mouse Gamer', 'precio'=>'7900'],
    ['id'=>2, 'nombre'=>'Audífonos Bluetooth', 'precio'=>'18500'],
    ['id'=>3, 'nombre'=>'Monitor Samsung', 'precio'=>'99990'],
    ['id'=>4, 'nombre'=>'Notebook Lenovo', 'precio'=>'350990'],
    ['id'=>5, 'nombre'=>'Teclado Mecánico', 'precio'=>'15790'],
    ['id'=>6, 'nombre'=>'PC Gamer', 'precio'=>'500990'],
    ['id'=>7, 'nombre'=>'Samsung Galaxy A50', 'precio'=>'345990'],
];

foreach ($productos as $producto) {
    echo $producto['nombre']. " - $" . $producto['precio']."<br>
    <a href='agregar.php?id=" . $producto['id'] . "'>Agregar al carrito</a><br><br>";
}
?>    
</div> 
<div id="results-container"> 
<!-- Los resultados de la búsqueda se mostrarán aquí --> 
</div> 

<?php
$cantidad = 0;

if(isset($_SESSION['carrito'])){
    $cantidad = array_sum($_SESSION['carrito']);
}
?>

<p id="carrito"> 
    <a href="carrito.php">
    🛒 Carrito: <?php echo $cantidad; ?> productos
</a>
</p>

<p id="mensaje"></p>
<form action="pedido.php" method="post">
    <h2>Registro de pedido</h2>
    <h3>Complete el siguiente formulario para registrar su pedido.</h3>
    <label for="descripcion_pedido">Descripción del pedido:</label><br>
    <input type="text" id="descripcion_pedido" name="descripcion_pedido" required><br><br>
    <label for="tipo_pedido">Tipo de pedido:</label><br>
    <select name="tipo_pedido" id="tipo_pedido">
        <option value="Compra normal">Compra normal</option>
        <option value="Envío express">Envío express</option>
        <option value="Retiro en tienda">Retiro en tienda</option>
    </select> <br><br>
    <label for="producto">Producto:</label><br>
    <select name="producto" id="producto">
        <option>Mouse Gamer</option>
        <option>Audífonos Bluetooth</option>
        <option>Monitor Samsung</option>
        <option>NotebooK Lenovo</option>
        <option>Teclado Mecánico</option>
        <option>PC Gamer</option>
        <option>Samsung Galaxy A50</option>
    </select><br><br>
    <label for="unidades">Unidades:</label><br>
    <input type="number" id="unidades" name="unidades" min="1" required><br><br>
    <label for="observaciones">Observaciones:</label><br>
    <textarea id="observaciones" name="observaciones" rows="4" cols="40" placeholder="Agrega instrucciones especiales para tu pedido."></textarea><br><br>
    <input type="submit" value="Registrar">
</form>
<br><br>

<form action="reseñas.php" method="post">
    <h2>Califica tu producto</h2>
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required placeholder="Ingrese su nombre."><br><br>
    <label for="calificacion">Calificación del producto:</label><br>
    <select name="calificacion" id="calificacion">
        <option>⭐ Muy malo</option>
        <option>⭐⭐ Malo</option>
        <option>⭐⭐⭐ Bueno</option>
        <option>⭐⭐⭐⭐ Muy Bueno</option>
        <option>⭐⭐⭐⭐⭐ ¡Excelente!</option>
    </select><br><br>
    <label for="comentario">Comentarios:</label><br>
    <textarea id="comentario" name="comentario" rows="4" cols="40" placeholder="Añade un comentario."></textarea><br><br>
    <input type="submit" value="Dejar reseña" >
</form>
<script src="script.js"></script>

</body> 
</html> 