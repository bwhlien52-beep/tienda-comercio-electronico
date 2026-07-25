<?php
session_start();

if (isset($_GET['id'])) {
    $productoId = $_GET['id'];

    if(isset($_SESSION['carrito'][$productoId])) {
        $_SESSION['carrito'][$productoId]++;
    } else {
        $_SESSION['carrito'][$productoId] = 1;
    }
    
}

header('Location: comercio_electronico.php');
?>