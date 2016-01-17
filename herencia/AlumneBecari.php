<?php
    
    class AlumneBecari extends Alumne {
    
        private $sou = 500;
        
        public function __construct($nom, $sou) {
            
            parent::__construct($nom); //accede al constructor de la superclase
            $this->sou = $sou;
            
        }
        
        public function getSou() {
            
            return $this->sou;
            
        }
        
        public static function mostrarDades() {
            
            echo parent::$escola."\n"; //accede a la constante de la superclase
            echo self::$sou."\n"; //accede a sou como responsabilidad de clase
            
        }
        
    }
    
    AlumneBecari::mostrarDades();
    echo Alumne::$escola;
?>