<?php

/**
 * 
 * 191015
 * @author mor
 * 
 * La sobrecarga convencional en PHP seria algo como esto. Como no te pide los
 * tipos de datos al declarar propiedades, tpc puede diferenciar las funciones
 * que tienen el mismo nombre (ya que no diferencia sus argumentos)
 * 
 * Aqui hay hechas dos funciones q hacen lo mismo pero difieren en los 
 * argumentos, como no pueden diferenciarse hay que ponerles nombres diferentes
 * 
 * Lo del __call no me he enterado mucho de que carajo es pero parece q es para
 * llamar las funciones dinamicamente desde la ejecucion del programa
 * 
 */

class ClasseSobrecarregada 
{ 
    public function __call($f, $p) 
    {
        echo "cridant al metode"; 
        if (method_exists($this, $f.sizeof($p))) 
        return call_user_func_array(array($this,$f.sizeof($p)),$p); // en cas que no existeixi el metode 
        throw new Exception('metode desconegut '.get_class($this).'::'.$f); 
    }
    
    public function param2($a, $b)
    { 
        echo "Param2($a,$b)\n"; 
    } 
    
    public function param3($a, $b, $c) 
    { 
        echo "Param3($a,$b,$c)\n"; 
    } 
    
}

$o = new ClasseSobrecarregada(); 

$o->param(4,5);     //llama a param2, mediante el metodo __call puede diferenciarlos sin saber cual es
$o->param(4,5,6);   