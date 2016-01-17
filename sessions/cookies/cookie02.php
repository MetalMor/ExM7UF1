<?php
	$comptador=1;
	$nom="Jaume Pons";
	if (isset($_COOKIE['compte'])) $comptador=$_COOKIE['compte'];
	else setcookie("nom","Jaume Pons",time()+3600,"/","",0);
	setcookie("compte",$comptador+1,time()+3600,"/","",0);
?>
<html>
    <head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Modificant Cookies amb PHP</title>
    </head>
    <body>
		TREBALLLANT I MODIFICANT COOKIES<br>
		<?php
			date_default_timezone_set('Europe/Andorra');
			echo "Hora: ".date('d/m/Y h:i:s')."<br>";
			if (isset($_COOKIE['compte'])) {
				echo "Hola ".$_COOKIE['nom']."<br>";
				echo "És la teva visita número: ".$_COOKIE['compte']."<br>";
			} else 	echo "Aquesta és la teva primera visita<br>";			
		?>
    </body>
</html>
