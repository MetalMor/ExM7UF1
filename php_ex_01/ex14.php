<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 14</title>
    </head>
    
    <body>
        
        <?php

            echo "<table border=\"1\">";

            for ( $i = 1 ; $i <= 5 ; $i++ ) {
                
                echo "<tr>";
                
                for ( $j = 1 ; $j <= 5 ; $j++ ) 
                    echo "<td>".$i*$j."</td>";
                
                echo "</tr>";
                
            }

            echo "</table>";
            
        ?>
        
    </body>
    
</html>