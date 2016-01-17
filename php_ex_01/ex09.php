<html>
    
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
        <title>PHP - Exercici 09</title>
    </head>
    
    <body>
        <?php

            date_default_timezone_set('Europe/Madrid'); //establece la zona horaria para calcular funciones relacionadas con el tiempo
            $script_tz = date_default_timezone_get(); //guarda la movida de la zona horaria y todo eso en la variable script_tz (?)(?)(?)
            
            echo "Hora actual: ".date("H:i:s")."<br/>"; // funcion date para cosas de tiempo (horas, dias, meses, etc), si le pones otros caracteres puedes hacer frases molonas (aqui por ejemplo he puesto dos puntos :D )
            
            if( date('H') <= 12 ) echo "Abans del migda. Encara queda molt dia per endavant.<br/>"; //si son mas tarde de las 12, pasará al else
            else echo "Després del migdia. Cada cop queda menys dia per endavant.<br/>";
    
        ?>
    </body>
    
</html>