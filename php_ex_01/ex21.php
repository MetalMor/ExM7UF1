<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 21</title>
    </head>
    
    <body>
        
        <?php
            
            function suma ($v1, $v2) {
                
                $total = $v1 + $v2;
                return $total;
                
            }
            
            function resta ($v1, $v2) {
                
                $total = $v1 - $v2;
                return $total;
                
            }
            
            function multiplicacio ($v1, $v2) {
                
                $total = $v1 * $v2;
                return $total;
                
            }
            
            function divisio ($v1, $v2) {
                
                $total = $v1 / $v2;
                return $total;
                
            }
        
            $operacions = array("suma", "resta", "multiplicacio", "divisio");
            
            $v1 = 3.27;
            $v2 = 2.65;
            
            foreach ($operacions as $op) echo "La $op de $v1 i $v2 és igual a ".number_format($op($v1,$v2),2).".<br/>";
            
        ?>
        
    </body>
    
</html>