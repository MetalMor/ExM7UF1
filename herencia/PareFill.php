<?php
    class Pare {
        
        function __construct () {
            
            print "En el constructor Pare\n";
        
        }
        
    }

    class Fill extends Pare { //clase Fill hereda de Pare
        
        function __construct () {
            
            parent::__construct (); //accede al constructor de la superclase
            print "En el constructor Fill\n";
        
        }
    
    }
?>