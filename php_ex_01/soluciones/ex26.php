<?php
	if ($_GET['envia']) {
		$correu="dc1415daw2@gmail.com"; 
		$assumpte="Enviament de correu amb PHP";
		$missatge="Missatge de prova";
		$capçalera="From: daniel collados<daniel.collados@fje.edu>"."\r\n";
		mail($correu, $assumpte, $missatge, $capçalera);		
	}
?>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title>ENVIAMENT DE CORREU</title>	
	</head>
	<body>  
		<form method="get" action="ex26.php">
			<b>Prem el “Envia” per transmetre el correu de prova:</b><br>
			<input type="submit" value="Envia" name='envia'/>
		</form>
	</body>
</html>
