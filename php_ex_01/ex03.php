<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 03</title>
    </head>
    
    <body>
        
        <?php
            
            //funcion gettype($variable) printa el tipo de la variable
            $var00 = 10;
            echo "La variable \$var00 és igual a $var00 i el seu tipus és ".gettype($var00).".<br/>";

            $var00 = 7.86;
            echo "La variable \$var00 és igual a $var00 i el seu tipus és ".gettype($var00).".<br/>";

            $var00 = 1;
            echo "La variable \$var00 és igual a $var00 i el seu tipus és ".gettype($var00).".<br/>";

            $var00 = "";
            echo "La variable \$var00 és igual a $var00 i el seu tipus és ".gettype($var00).".<br/>";
            
            $var00 = array("Hola",10.5,2);
            echo "La variable \$var00 és de tipus ".gettype($var00);

        ?>
        
    </body>
    
</html>