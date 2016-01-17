<?php

/**
 * 
 * 191015
 * @author mor
 * 
 * TRAITS
 * Miniherencias un poco bugeras para reutilizar el codigo dentro de un mismo
 * proyecto. Al sergi grau no le molan mucho :( :(
 * Lo malo de esto es que solo existe en php
 * 
 */

trait Hola {
    
    public function dirHola() {
        echo 'Hola ';
    }
    
}

trait Mon {
    
    public function dirMon() {
        echo 'mon.';
    }
    
}

class HolaMon {
    
    use Hola, Mon;
    
    public function saludar() {
        echo '!';
    }
    
}

$o = new HolaMon();

$o->dirHola();
$o->dirMon();
$o->saludar();