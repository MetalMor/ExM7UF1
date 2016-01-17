<?php
        class Classe {
            //declara propiedad o atributo
            public $var = 'un valor predeterminat';
            
            //declara método
            public function mostrarVar() {
                echo $this->var;
            }
        }

        $objecte = new Classe(); //crea el objeto objecte de clase Classe
        $objecte->mostrarVar(); //ejecuta el modo mostrarVar() del objeto objecte

        // -> es lo mismo que . en java/javascript
?>