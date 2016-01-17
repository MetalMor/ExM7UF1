<?php
	if (isset($_COOKIE['compte'])) {
		echo "Esborrant la cookie nom<br>";				
		setcookie("compte","",time()-3600);
	}
	if (isset($_COOKIE['nom'])) {
		echo "Esborrant la cookie compte<br>";
		setcookie("nom","",time()-3600);
	} 
?>
<html>
    <head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Esborrant cookies</title>
    </head>
    <body>
		ESBORRANT COOKIES<br>
		<?php
			date_default_timezone_set('Europe/Andorra');
			echo "Hora: ".date('d/m/Y h:i:s')."<br>";
		?>
    </body>
</html>
