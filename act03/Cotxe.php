<!-- 191015 -->

<?php

spl_autoload_register(function ($clase) { 
    include $clase . '.php'; 
}); //autocarga de clases en la misma carpeta
/* 
 * 
 * 221015
 * @author mor
 * 
 */
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
        if ($other->matricula == $this->matricula) return true;
    }
        
}

?>