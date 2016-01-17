<?php
    
    // autocarga de clases (coge todos los .php de la carpeta donde se encuentre este archivo
    spl_autoload_register(function ($clase) {
        include $clase . '.php';
    });

    $un_alumno = new Alumno();
    $un_alumno->set_nom('joel');
    
    echo "el nom es ".$un_alumno->get_nom()." de ".Alumno::ESCOLA; // :: se usa en vez de -> para responsabilidades de clase (static, constantes, etc)

?>