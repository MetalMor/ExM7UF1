<?php

/**
 *
 * 191015
 * @author mor
 * 
 * SOBRECARGA Y METODOS MAGICOS
 * 
 * No confundir con la sobrecarga convencional (repetir un método con el mismo
 * nombre q otro)
 * Se refiere a cuando en tiempo d ejecucion creas una propiedad q no estaba en 
 * la clase programada. Para este movidon se usan algunos metodos magicos, de
 * esos q empiezan por dos guiones bajos.
 * 
 */

class PropertyTest { 
    
    private $data = array(); 
    
    public function __set ( $nom , $valor ) 
    {
        
        echo "assignant ' $nom ' amb ' $valor '\n" ; 
        $this -> data [ $nom ] = $valor ;
        
    }
    
    public function __get ( $nom ) 
    {
        
        echo "accedint a ' $nom ' amb valor " ; 
        if ( array_key_exists ( $nom , $this > data )) return $this > data [ $nom ]; 
         
    } 
    
    public function __isset ( $nom ) 
    {
        
        echo "està ' $nom ' assignat?\n" ; 
        return isset( $this -> data [ $nom ]);
        
    }
    
    public function __unset ( $nom ) 
    {
        
        echo "deassignant ' $nom '\n" ; 
        unset( $this -> data [ $nom ]);
        
    }
    
}

$pt = new PropertyTest(); 
$pt>__set("nom", "sergi");

echo $pt>__get("nom"); 
echo $pt>__isset("nom"); 
echo $pt>__unset("nom"); 
echo $pt>__get("nom");