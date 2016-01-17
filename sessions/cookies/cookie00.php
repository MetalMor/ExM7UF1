<?php
// /etc/php5/apache2/php.ini --> Línia 1404 --> session.use_cookies = 1 --> reinicia apache2
$nom_cookie = "usuari";
$valor_cookie = "Jaume Pons";
setcookie($nom_cookie, $valor_cookie,time() + (86400 * 30), "/"); // 86400 = 1 dia
//setcookie --> Creació i modificació de cookies
//Ha de ser cridada abans de qualsevol HTML
?>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Creant Cookies amb PHP</title>
    </head>
	<body>
		CREANT COOKIES. TREBALLANT AMB $_COOKIE<br>
		<?php
			if(!isset($_COOKIE[$nom_cookie])) echo "La cookie anomenada ".$nom_cookie." encara no té una assignació<br>";
			else {
				echo "La cookie anomenada ".$nom_cookie." té ara una assignació<br>";
				echo "El valor emmagatzemat és: ".$_COOKIE[$nom_cookie]."<br>";
			} 
		?>
	</body>
</html> 
