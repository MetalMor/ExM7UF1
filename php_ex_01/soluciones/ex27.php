<?php
	$correu=$_POST['adressa']; 
	$assumpte=$_POST['assumpte'];
	$missatge=$_POST['missatge'];
	$des_de="From: xxxxxx.clot@fje.edu"."\r\n";
	//Canvia xxxxx pel teu número de compte de correu de l'escola
	echo "<html>";
	echo '<head><meta content="text/html; charset=UTF-8" http-equiv="content-type"><title>ENVIAMENT DE CORREU ELECTRÒNIC</title></head>'; 
	$resultat=mail($correu, $assumpte, $missatge,$des_de);
	if ($resultat) echo '<body>CORREU ELECTRÒNIC ENVIAT</body>';
	else echo '<body>CORREU ELECTRÒNIC NO ENVIAT</body>';
	echo '<form action="http://localhost/ex27.html">';
	echo '<font face="Arial"><input type="submit" value="Retorna al formulari"/></font>';
	echo '</form></html>';
?>
