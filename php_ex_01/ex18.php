<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 18</title>
    </head>
    
    <body>
        
        <?php
            
            $i = 0; //contador foreach
            
            $llista = array(
                array("Nova York", "Londres", "Paris", "Roma", "Barcelona", "Los Angeles", "Tokyo", "Amsterdam", "Manchester", "Singapur", "Brasilia"),
                array(),
                array()
            );
            $llista[1] = $llista[0];
            sort($llista[1]);
            $llista[2] = array_reverse($llista[1]);
            
            echo "<table border=\"1\">";
            echo "<tr><td><b>LLISTA1</b></td><td><b>LLISTA2</b></td><td><b>LLISTA3</b></td></tr>";
            
            
            foreach ($llista[0] as $ciutats) {
                
                echo "<tr><td>$ciutats</td><td>".$llista[1][$i]."</td><td>".$llista[2][$i]."</td></tr>";
                $i++;
            
            }
            
            echo "</table>";
            
        ?>
        
    </body>
    
</html>