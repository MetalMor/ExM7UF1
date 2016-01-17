<?php
class Classe
{
    // declara una propiedad o atributo
    public $var = 'un valor predeterminat';
    
    // declara un método
    public function mostrarVar() {
        echo $this->var.'<br/>';
        echo 'la classe s\'anomena '.get_class($this).'.<br/>'; // con get_class() obtiene la clase del objeto argumento
    }
}

$v = 'Classe';

// instancia un objeto de la clase Classe a partir de una variable de tipo string
$objecte = new $v();
$objecte->mostrarVar();
?>