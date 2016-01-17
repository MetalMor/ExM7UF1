</html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Tipus de variables</title>
</head>  
<body>  
 <?php
	//1a assignació
	$var00 = 10;
	echo "La variable \$var00 és igual a $var00 i el seu tipus és ".gettype($var00).".<br/>\n";  
	//2a assignació
	$var00 = 7.86;
	echo "La variable \$var00 és igual a $var00 i el seu tipus és ".gettype($var00).".<br/>\n";  
	//Tercera assignació 
	$var00 = true;
	echo "La variable \$var00 és igual a $var00 i el seu tipus és ".gettype($var00).".<br/>\n";  
	//4a assignació  
	$var00 = null;
	echo "La variable \$var00 és igual a $var00 i el seu tipus és ".gettype($var00).".<br/>\n";
	//5a assignació
	$var00 = array (1 => "Hola", 2 => 10.5, 3 => 2);
	echo "La variable \$var00 és de tipus ".gettype($var00).".<br/>\n";   
 ?>  
</body>
</html>
