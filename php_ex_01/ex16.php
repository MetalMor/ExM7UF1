<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 16</title>
    </head>
    
    <body>
        
        <?php

            $llista = array("Llopis", "García", "Peris", "Gomis", "Ramírez", "García", "Adams", "Ramírez", "García");
            $freq = array_count_values($llista); //array_count_values cuenta las veces q se repite cada uno de los valores del array llista, asort los ordena y todo se guarda en forma de un array $freq
            arsort($freq);

            echo "<table border=\"1\">";

            echo "<tr><td><b>COGNOM</b></td><td><b>FREQ</b></td></tr>";
            foreach ( $freq as $cognom => $rep ) echo "<tr><td>$cognom</td><td>$rep</td></tr>";

            echo "</table>";
            
        ?>
        
    </body>
    
</html>