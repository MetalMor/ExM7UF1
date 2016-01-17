<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 04</title>
    </head>
    
    <body>
        
        <?php

            //bucle para arrays, la primera variable es el array y la segunda el nombre q tendra la variable a la q se asigna cada uno de los valores del array
            $temp = array(20.56,31.45,32.51,24.67);
            $i = 0;

            foreach ($temp as $t) {
                $i++;
                echo "Temperatura $i: $t ºC<br/>";
                $sum = $sum + $t;
            }

            echo "La temperatura mitjana és ".number_format($sum/$i,1)." ºC<br/>";

        ?>
        
    </body>
    
</html>