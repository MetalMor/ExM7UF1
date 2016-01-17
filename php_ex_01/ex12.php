<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 12</title>
    </head>
    
    <body>
        
        <?php

            function resolucio($valor, $i, $sum) {
                
                echo "Primer valor negatiu trobat: ".$valor.".<br/>";   
                echo "Posició del valor = ".$i.".<br/>";
                echo "Suma dels valors = ".$sum.".<br/>";
                
            }

            $dades = array(1, 5, 9, 3, -1, 4, 0, -7, 8, 6, 2);
            $i = 0;
            $sum = 0;
            
            while ( $dades[$i] > 0 ) { $sum = $sum + $dades[$i++]; }

            resolucio($dades[$i],$i,$sum);

            $i = count($dades)-1;
            $sum = 0;

            do { $sum = $sum + $dades[$i--]; } while ( $dades[$i] > 0 );
                
            resolucio($dades[$i],$i,$sum);            
            
        ?>
        
    </body>
    
</html>