
<?php
/*
* @author sergi.grau@fje.edu
* @version 1.0 8.10.2015
*/
spl_autoload_register(function ($clase) {
    include $clase . '.php';
});

$dni = new DNI(12345678);
echo 'el nombre es '.$dni->getNumero();
$nif = new NIF(12345678);
var_dump($nif, (string) $nif);
$persona = new Professor();
$persona->setNom('SERGI');
$persona->setNIF($nif);
var_dump($persona, (string) $persona);
$persona2= Persona::crearPersonaNombreNIF('JOAN',87654321); //mètode factoria
var_dump($persona2, (string) $persona2);
$alumne = new Alumne();
$alumne->setNom('ANNA');
$alumne->setNIF($nif);
var_dump($alumne, (string) $alumne);
$professor= new Professor();
$professor->setNom('SERGI');
$professor->setNIF($nif);
$professor->setSou(1000);
var_dump($professor, (string) $professor);
?>