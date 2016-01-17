<?php
include "Alumne.php"; //lee el archivo Alumne.php donde está la clase Alumne

echo "Alumnes: <br/>";

$unAlumne = new Alumne(); //crea un objeto Alumne

$unAlumne->setNom("joel");
$unAlumne->setEdat(19);
$unAlumne->setCurs(2);
$unAlumne->mostrarDades();

$unAltreAlumne = new Alumne();
    
$unAltreAlumne->setNom("bla");
$unAltreAlumne->setEdat(18);
$unAltreAlumne->setCurs(1);
$unAltreAlumne->mostrarDades();
?>