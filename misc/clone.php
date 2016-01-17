<?php
use cacatua\Persona; // para coger una clase del espacio de nombres cacatua (ojo, es contrabarra, no barra)

include "equals.php";

$objecteClonat= clone $a; // en vez de apuntar al mismo espacio en memoria, apunta a otro con los mismos valores
$objecteClonat>setNom("unAltre"); 
echo $a; 
echo $objecteClonat; 
$a = new Persona('joan','pera'); 
$b = new Persona('joan','pera'); 
if($a==$b) echo "==";  // este si q saldra porque son iguales
if($a===$b) echo "==="; // este no saldra, pq no apuntan al mismo espacio en memoria