<?php

class Alumne {

    //atributos o propiedades
    private $nom; //principio de ocultacion de datos: normalmente los atributos son privados pq se accede a ellos con getters y setters
    private $edat;
    private $curs;
    public static $escola = 'Escola del Clot';
    
    //metodos accesores
    public function setNom($n){ //asigna un valor a nom
        $this->nom=$n; //this se refiere al objeto al q se accede al llamar este metodo
    }
    public function getNom(){ //devuelve el valor de nom
        return $this->nom;
    }
    
    public function setEdat($e){
        $this->edat=$e;
    }
    public function getEdat(){
        return $this->edat;
    }
    
    public function setCurs($c){
        $this->curs=$c;
    }
    public function getCurs(){
        return $this->curs;
    }
    
    public function mostrarDades(){ //operacion que printa directamente los atributos mediante getters
        echo $this->getNom()." - ".$this->getEdat()." - Curs: ".$this->getCurs()."<br/>";
    }
}
?>
