    <?php

        $num=5;
        $text='Hola '.$num; //integer se adapta a un string pq el php esta poco prototipado
        echo $text.'\n';

        $a=63; //tipo integer (enteros)
        $b=6.3; //tipo float aka double (hasta 14 decimales)
        $c='true'; //tipo boolean (true o false)
        $d='ola ke ase'; //tipo string (cadena de caracteres)
        $e='NULL'; //variable vacia
        $f=array('patatas','coliflor','lechuga','23'); //array aka vector
        echo 'Ayer\, día '.--$f[3].' comí '.$f[1].' con '.$f[0].'\, hoy día '.$f[3].' comeré '.$f[2].'\.'; //prueba de array
    ?>