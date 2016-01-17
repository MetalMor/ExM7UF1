<?php

/**
 * 
 * 221015
 * @author mor
 * 
 */

spl_autoload_register(function ($clase) { 
    include $clase . '.php'; 
}); //autocarga de clases en la misma carpeta

class Cotxe {
        
    private $matricula;
        
    public function __construct() {
        
        echo "Creant objecte de la classe Cotxe<br/>".$this;
        $this->matricula = "1234ABC";
            
    }
    
    public function getMatricula() {
        return $this->matricula;
    }
    
    public function __toString() {
        return "Matricula: ".getMatricula().'.';
    }
    
    public function equals($other) {
        if ($other == null) return false;
        if (!($other instanceof Cotxe)) return false;
        if ($other->matricula === $this->matricula) return true;
    }
    
    public function __set ( $valor ) 
    {
        
        echo "Assignant color ' $valor '<br/>" ; 
        if (($this -> color = $valor) != FALSE) {
            echo "Impossible<br/>";
            return FALSE; // (?)(?) revisar esto (supuestamente si puede asignar el valor, lo asigna, si da false, sale;
        }
        return TRUE;
    }
    
    public function __get (  ) {
        
        return $this -> color; 
         
    } 
    
    public function __isset(  ) {
        
        if (exists($this->color)) return TRUE;
        return FALSE;
        
    }
    
    public function __unset (  ) {
        
        echo "deassignant color".$this->color."<br/>" ; 
        unset( $this -> color );
        
    }
        
}

?>
