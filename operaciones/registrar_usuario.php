<?php
include("../include/conexion.php");

$dni = $_POST['dni'];
$ApeyNom = $_POST['ApeyNom'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fechaNa = $_POST['fechaNa'];

echo $dni,"<br>";
echo $ApeyNom,"<br>";
echo $correo,"<br>";
echo $telefono,"<br>";
echo $direccion,"<br>";
echo $fechaNa,"<br>";

$consulta = "INSERT INTO usuario (dni, apellidos_nombres, correo_electronico, telefono,
direccion, fecha_nacimiento, password, activo, reset_password, token_password) VALUE
('$dni', '$ApeyNom', '$correo', '$telefono', '$direccion', '$fechaNa', '$dni', 1,0,' ')";

$ejecutar = mysqli_query($conexion, $consulta);

if ($ejecutar) {
    echo "Registro Exitoso";
}else {
    echo "Error en el Registro";
}
?>