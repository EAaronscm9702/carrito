<?php
include('include/conexion.php');

$consulta = "SELECT * FROM usuario";
$ejecutar = mysqli_query($conexion, $consulta);
while ($respuesta = mysqli_fetch_array($ejecutar)) {
    # code...
    echo $respuesta['dni']."<br>",$respuesta['apellidos_nombres']."<br>",$respuesta['correo']."<br>",$respuesta['telefono']."<br>",$respuesta['direccion']."<br>",$respuesta['fecha_nacimiento']."<br>",$respuesta['password']."<br>",$respuesta['id_rol']."<br>",$respuesta['foto']."<br>",$respuesta['activo']."<br>";

}
?>
<br>
<a href="formulario.php"><button>de regreso</button></a>