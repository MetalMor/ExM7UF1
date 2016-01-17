<?php
	session_start(); //Inicia o reanuda una sessió
?>
<html>
    <head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Treballant amb variables de sessió - I: Identificador de sessió dins cookie PHPSESID</title>
    </head>
    <body>
		<b><u>TREBALLANT AMB VARIABLES DE SESSIÓ (AMB IDENTIFICADOR DE SESSIÓ EMMAGATZEMAT A LA COOKIE PHPSESID</u></b><br>
		<?php
			date_default_timezone_set('Europe/Andorra');
			echo "Hora: ".date('d/m/Y h:i:s')."<br>";
			echo "Sessió: ".session_id()."<br>";
			echo "Variables assignades durant la sessió: <br>";
			echo "Identificador d'usuari: ".$_SESSION['id_usuari']."<br>";
			echo "Nom d'usuari: ".$_SESSION['nom_usuari']."<br>";
		?>
    </body>
</html>
