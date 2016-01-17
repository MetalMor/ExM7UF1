</html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Estructura de control while i do..while</title>
</head>  
<body>
<?php
	$dades=array(1,5,9,3,-1,4,0,-7,8,6);
	$i=0;
	$suma=0;
	while ($dades[$i] >= 0) {
		$i++;
		$suma=$suma+$dades[$i];
	}
	echo "Primer valor negatiu trobat = $dades[$i]</br>";
	echo "Posició del valor = $i</br>";
	echo "Suma dels valors trobats abans del primer valor negatiu = $suma</br>";
	$i=count($dades)-1;
	$suma=0;
	do{
		$suma=$suma+$dades[$i];
		$i--;
	} while ($dades[$i] >= 0);
	echo "Primer valor negatiu trobat = $dades[$i]</br>";
	echo "Posició del valor = $i</br>";
	echo "Suma dels valors trobats abans del primer valor negatiu = $suma</br>";
?> 
</body>
</html>
