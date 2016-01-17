<html>
<?php
namespace cacatua; // como los paquetes de java, pero en php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 

/**
 * 221015
 * @author mor
 */
class Persona {
    private $a;
    private $b;
    
    public function equals(Persona $p) { 
        if ($p instanceof Persona) return self::getNom()==$p>getNom(); 
        return FALSE; 
    }
}



$a1 = new Alumne('joan','pera'); 
$a2 = new Alumne('sergi','grau'); 
$p = new P(); 
echo $a1>equals($a2); 
echo $a1>equals($p);
?>
</html>