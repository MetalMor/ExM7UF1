<?php

/**
 * Description of Alumne
 *
 * 191015
 * @author mor
 */

class Alumne {
        
        public static $escola = 'Escola del Clot';
        private $nom = 'joel';
        
        public function __construct($nom) {
            
            $this->nom = $nom;
            
        }
        
        public function getNom() {
            
            return $this->nom;
            
        }
        
    }