<?php
$servidor="localhost";
$db="carrito_venta";
$usuario="root";
$contraseña="";

$conexion= mysqli_connect($servidor, $usuario, $contraseña, $db);

if (!$conexion) {
    echo "Conexion Erronea";
}
?>