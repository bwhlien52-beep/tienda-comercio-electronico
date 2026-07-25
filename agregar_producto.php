<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="formulario_style.css"> 
<title>Panel para añadir productos</title> 
</head>
<body> 
<form action="guardar_producto.php" method="post" onsubmit="return ValidarProducto()">
    <h1> Añadir Productos a Tienda </h1>
    <label for="nombre">Nombre Producto: </label><br>
    <input type="text" id="nombre" name="nombre"><br><br>
    <label for="descripcion">Descripción del producto:</label><br>
    <textarea id="descripcion" name="descripcion" rows="4" cols="40"></textarea><br><br>
    <label for="precio">Precio:</label><br>
    <input type="number" id="precio" name="precio"><br><br>
    <label for="stock">Stock:</label><br>
    <input type="number" id="stock" name="stock"><br><br>
    <input type="submit" value="Guardar producto.">
</form>
<script src="validaciones.js"></script>
</body>
</html>