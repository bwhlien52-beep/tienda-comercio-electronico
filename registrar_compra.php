<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="formulario_style.css"> 
<title>Registrar Compra</title> 
</head>
<body>
<form action="guardar_compra.php" method="post">

    <label for="id_cliente">ID cliente:</label><br>
    <input type="number" name="id_cliente"><br><br>

    <label for="id_producto">ID producto:</label><br>
    <input type="number" name="id_producto"><br><br>

    <label for="cantidad">Cantidad:</label><br>
    <input type="number" id="cantidad" name="cantidad"><br><br>

    <input type="submit" value="Registrar compra">

</form>
</body>
</html>
