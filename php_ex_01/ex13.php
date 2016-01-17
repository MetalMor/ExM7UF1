<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 13</title>
    </head>
    
    <body>
        
        <?php

            echo "<table border=\"1\">";
            echo "<tr><td><b>NUM</b></td><td><b>log10</b></td><td><b>ln</b></td></tr>";
            for ( $num = 1 ; $num <= 10 ; $num++ ) {
                
                echo "<tr><td>".$num."</td><td>".number_format(log10($num),2)."</td><td>".number_format(log($num),2)."</td></tr>";
                
            }
            echo "</table>";
            
        ?>
        
    </body>
    
</html>