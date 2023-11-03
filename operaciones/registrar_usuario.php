<?php
include("../include/conexion.php");

$dni = $_POST['dni'];
$ApeyNom = $_POST['ApeyNom'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fechaNa = $_POST['fechaNa'];
$id_rol = $_POST['id_rol'];

$nombre_archivo = $dni.".jpg";
$ruta_foto="../img_usuarios/".$nombre_archivo;

$pass_secure = password_hash($dni, PASSWORD_DEFAULT);


if (move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_foto)) {

    $consulta = "INSERT INTO usuario (dni, apellidos_nombres, correo, telefono, direccion, 
    fecha_nacimiento, password, id_rol, foto, activo, reset_password, token_password) VALUE ('$dni', '$ApeyNom', 
    '$correo', '$telefono', '$direccion', '$fechaNa', '$pass_secure', '$id_rol','$nombre_archivo',1,0,'')";

    $ejecutar = mysqli_query($conexion, $consulta);

    if ($ejecutar) {
        echo "Registro Exitoso";
    }else {
        echo "Error en el Registro";
    }
    }else {
        echo "Error al subir la Foto";
    }
?>