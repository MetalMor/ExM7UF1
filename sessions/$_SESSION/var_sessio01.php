<?php
	// /etc/php5/apache2/php.ini --> Línia 1404 --> session.auto_start = 1 --> reinicia apache2
	//La funció session_start() ha d'estar al principi de tot i abans de qualsevol etiqueta HTML
	session_start();
?>
<html>
    <head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Treballant amb variables de sessió - I: Identificador de sessió dins cookie PHPSESID</title>
    </head>
    <body>
		<b><u>TREBALLANT AMB VARIABLES DE SESSIÓ (AMB IDENTIFICADOR DE SESSIÓ EMMAGATZEMAT A LA COOKIE PHPSESID</u></b><br>
		<?php
			$_SESSION['id_usuari']=1001;
			$_SESSION['nom_usuari']="Jaume Pons";
			date_default_timezone_set('Europe/Andorra');
			echo "Hora: ".date('d/m/Y h:i:s')."<br>";
			echo "Sessió iniciada. Assignació de variables realitzada<br>";
			echo "L'identificador de sessió és: ".session_id()."<br>";
			echo "El nom de fitxer a on es desa l'identifcador de sessió és: ".session_name()."<br>";	
		?>
    </body>
</html>
