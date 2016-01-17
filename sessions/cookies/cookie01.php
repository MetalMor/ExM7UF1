<?php
// /etc/php5/apache2/php.ini --> Línia 1404 --> session.use_cookies = 1 --> reinicia apache2
$nom_cookie = "usuari";
$valor_cookie = "Jaume Pons";
setcookie($nom_cookie, $valor_cookie);
//setcookie --> Creació i modificació de cookies
//Ha de ser cridada abans de qualsevol HTML
?>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Creant Cookies amb PHP</title>
    </head>
	<body>
		CREANT COOKIES. TREBALLANT AMN $_COOKIE<br>
		<?php
			if(!isset($_COOKIE[$nom_cookie])) echo "Hola. Aquesta és la teva primera visita";
			else echo "Hola ".$_COOKIE[$nom_cookie]." Gràcies per tornar a visitar-nos";
		?>
	</body>
</html> 
