<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 22</title>
        <style type="text/css">
            td {
                text-align:center;
            }
        </style>
    </head>
    
    <body>
        
        <?php
            
            function ordena_array(&$dades_antic_ordre, $tipus_ordre) {
                
                switch ($tipus_ordre) {
                    
                    case 0:
                        sort($dades_antic_ordre);
                        $nou_array = array_reverse($dades_antic_ordre);
                        break;
                    
                    case 1:
                        sort($dades_antic_ordre);
                        $nou_array = $dades_antic_ordre;
                        break;
                    
                    default:
                        $nou_array = $dades_antic_ordre;
                        break;
                    
                }
                
                return $nou_array;
                
            }
            
            function mostra_dades($dades_actuals, $tipus_mostra) {
                
                echo "<table border=\"1\" width=\"30%\">";
                echo "<tr><td colspan=\"".count($dades_actuals)."\"><b>";
                
                if ($tipus_mostra == 0) echo "ORDENAT DE MAJOR A MENOR";
                elseif ($tipus_mostra == 1) echo "ORDENAT DE MENOR A MAJOR";
                else echo "DADES INICIALS SENSE ORDENAR";
                
                echo "</b></td></tr><tr>";
                
                foreach ($dades_actuals as $dada=>$valor) echo "<td>$valor</td>";
                echo "</tr></table>";
                
            }
            
            $dades = array(
                1=>1,
                2=>5,
                3=>9,
                4=>3,
                5=>-1,
                6=>4,
                7=>0,
                8=>-7,
                9=>8,
                10=>6
                );
            
            $ordre = array(2,0,1);
            foreach ($ordre as $o) 
                mostra_dades(ordena_array($dades, $o),$o);
            
        ?>
        
    </body>
    
</html>