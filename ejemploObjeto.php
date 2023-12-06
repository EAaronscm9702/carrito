<?php
$lista = array("Alfredo", "Yhul", "Eliana", "Willian", "Stewar", "Mayte", "Deisy", "Raul", "Zamira", "bruno", "Rosilda", "Denisse", "Jerson", "Aarón", "Magaly");

//echo $lista[0];

$contar= count($lista);
for ($i=0; $i < $contar; $i++) { 
    echo $lista[$i]."<br>";
}
echo"<br>";

/*array_push($lista, "faraón");

$contar=count($lista);
print_r($lista);
for ($i=0; $i < $contar; $i++) { 
    echo $lista[$i]."<br>";
}
*/
echo"<>";
echo"<>";
echo"<>";
echo"<>";

$lista2= array("Aarón"=>43);
print_r($lista2);
?>