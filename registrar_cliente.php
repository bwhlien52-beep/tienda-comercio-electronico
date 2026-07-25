<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="formulario_style.css"> 
<title>Registrar clientes</title> 
</head>
<body> 
<form action="guardar_cliente.php" method="post" onsubmit="return ValidarCliente()">
    <h2> ¿Desea registrarse? </h2>
    <h3> ¡Ingrese sus datos! </h3>

    <label for="nombre">Nombre y apellido:</label><br>
    <input type="text" id="nombre_cliente" name="nombre" placeholder="Ejemplo: Juan Soto"><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email_cliente" name="email" placeholder="email@ejemplo.com"><br><br>
    <label for="direccion">Dirección:</label><br>
    <input type="text"  id="direccion_cliente" name="direccion" placeholder="Calle Ejemplo 1234"><br><br>
    <input type="submit" value="Registrar mis datos.">
    <script src="validaciones.js"></script>
</form>