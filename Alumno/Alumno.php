<?php
    class Alumno {
        
        private $nom='';
        const ESCOLA = 'l\'Escola del Clot';
        
        public function __construct($nom){
            $this->nom = $nom;
        }
        
        public function get_nom() {
            return $this->nom;
        }
        
        public function set_nom($nom) {
            $this->nom = $nom;
        }
    }
?>