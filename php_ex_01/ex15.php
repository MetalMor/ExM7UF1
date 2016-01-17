<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 15</title>
    </head>
    
    <body>
        
        <?php

            $llista = array("DELL" => 876, "HP" => 990, "ASUS" => 1002, "TOSHIBA" => 1028, "ACER" => 1056);

            echo "<table border=\"1\">";

            echo "<tr><td><b>MARCA</b></td><td><b>CODI</b></td></tr>";
            foreach ( $llista as $marca => $codi ) echo "<tr><td>$marca</td><td>$codi</td></tr>";

            echo "</table>";
            
        ?>
        
    </body>
    
</html>