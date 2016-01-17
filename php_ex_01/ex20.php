<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 20</title>
    </head>
    
    <body>
        
        <?php
            
            function taula (array $array, int $x) {
                
                echo "<table border=\"1\">";
                echo "<tr><td><b>LLISTA$x</b></td></tr><tr>";
                
                foreach ($array as $key) echo "<td>$key</td>";
                echo "</tr></table>";
                
            }
        
            $capitals = array("Barcelona", "Madrid" , "Paris", "Londres", "Washington", "Roma", "Tokyo", "El Caire", "Canberra", "Buenos Aires");
            
            taula($capitals,1);
            echo "Recompte (count): ".count($capitals)."<br/><br/>";
            
            array_push($capitals, "Moscou", "Beijing");
            taula($capitals,2);
            echo "Recompte (sizeof): ".sizeof($capitals)."<br/><br/>"; // sizeof no se recomienda usarla pq es un alias de count, además no significa lo mismo en otros lenguajes por lo q podria ser ambiguo
            
            //$capital_extreta = array_pop($capitals);
            taula($capitals,3);
            echo "Recompte (array_pop): ".count($capitals)."<br/><br/>";
            
        ?>
        
    </body>
    
</html>