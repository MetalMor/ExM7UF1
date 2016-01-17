<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 11</title>
    </head>
    
    <body>
        
        <?php

            date_default_timezone_set('Europe/Madrid'); //establece la zona horaria para calcular funciones relacionadas con el tiempo
            $script_tz = date_default_timezone_get(); //guarda la movida de la zona horaria y todo eso en la variable script_tz (?)(?)(?)
            
            function avuiToca($exm) {
                
                echo "Examen de $exm.<br/>";
                
            }

            echo "Dia actual: ".$dia = date("l")."<br/>"; // funcion date para cosas de tiempo (horas, dias, meses, etc), si le pones otros caracteres puedes hacer frases molonas

            switch ($dia = date("D")) {
                
                case "Mon":
                    avuiToca("HTTP");
                    break;
                    
                case "Tue":
                    avuiToca("Git");
                    break;
                    
                case "Wed":
                    avuiToca("PHP");
                    break;
                    
                case "Thu":
                    avuiToca("Javascript");
                    break;
                    
                case "Fri":
                    avuiToca("SQL");
                    break;
                    
                default:
                    echo "Avui no hi ha examen.<br/>";
                    break;
                    
            }
    
        ?>
        
    </body>
    
</html>