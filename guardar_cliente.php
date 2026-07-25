<?php

require 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO CLIENTE (nombre, email, direccion) VALUES ('$nombre', '$email', '$direccion')";
if ($conn->query($sql) === TRUE) {
    echo "¡Gracias por registrarse!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 

?>