<?php
include("../include/conexion.php");

$ruc_dni=$_POST("rucdni");
$razon_social=$_POST("raso");
$telefono=$_POST("tele");
$correo=$_POST("correo");
$direccion=$_POST("direccion");
$direccion_envio=$_POST("dien");

    $consulta = "INSERT INTO cliente (rucdni, raso, tele, correo, direccion, dien) VALUE ('$ruc_dni', '$razon_social', '$telefono', '$correo', '$direccion', '$direccion_envio')";

    $ejecutar = mysqli_query($conexion, $consulta);

    if ($ejecutar) {
        echo "Registro Exitoso";
    }else {
        echo "Error en el Registro";
    }
?>