<?php
	session_start();
	setcookie("PHPSESSID","",time()-3600);//Eliminant la cookie de la sessió
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
			echo "Eliminant les variables de sessió i destruint la sessió<br>";
			session_unset(); //Eliminant variables.
			session_destroy(); //Destrucció de la sessió
			echo "Sessió: ".session_id()."<br>";
			echo "Identificador d'usuari: ".$_SESSION['id_usuari']."<br>";
			echo "Nom d'usuari: ".$_SESSION['nom_usuari']."<br>";
		?>
    </body>
</html>
