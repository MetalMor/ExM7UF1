<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 17</title>
        <style type="text/css"> 
            td, th {
                width: 18em; 
                border: 1px solid black; 
                padding-left: 4px;
            } 
            th {
                text-align:center;
            } 
            table {
                border-collapse: collapse; 
                border: 2px solid black;
            } 
        </style>
    </head>
    
    <body>
        
        <?php

            $capitals = array("Barcelona", "Madrid" , "Paris", "Londres", "Washington", "Roma", "Tokyo", "El Caire", "Canberra", "Buenos Aires");
            $paisos_continents = array(
                array("Catalunya", "Espai sideral"),
                array("Espanya", "Europa"),
                array("França", "Europa"),
                array("Regne Unit", "Europa"),
                array("Estats Units", "Amèrica"),
                array("Itàlia", "Europa"),
                array("Japó", "Àsia"),
                array("Egipte", "Àfrica"),
                array("Austràlia", "Oceania"),
                array("Argentina", "Amèrica")
            );
            
            $mon = array_combine($capitals, $paisos_continents);
            
            echo "<table border=\"1\">";
            echo "<tr><td><b>CAPITAL</b></td><td><b>PAIS</b></td><td><b>CONTINENT</b></td></tr>";
            
            foreach ($mon as $capitals => $paisos_continents) echo "<tr><td>$capitals</td><td>$paisos_continents[0]</td><td>$paisos_continents[1]</td></tr>";  // $capitals -> array unidimensional | $paisos_continents -> array multidimensional [2]
            
            echo "</table>"
            
        ?>
        
    </body>
    
</html>