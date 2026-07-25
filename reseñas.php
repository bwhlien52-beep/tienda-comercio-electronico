<?php

function mostrar_resena($nombre, $calificacion, $comentario) {
    echo "Cliente: ".$nombre."<br>";
    echo "Calificación: ".$calificacion."<br>";
    echo "Comentario: ".$comentario."<br>";
}

$nombre = $_POST['nombre'];
$calificacion = $_POST['calificacion'];
$comentario = $_POST['comentario'];

mostrar_resena($nombre, $calificacion, $comentario);

