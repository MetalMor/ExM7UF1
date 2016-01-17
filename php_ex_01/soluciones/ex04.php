</html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>array i operadors</title>
</head>  
<body>  
 <?php
	$temp = array (20.56,31.45,32.51,24.67);
	$mitja = ($temp[0]+$temp[1]+$temp[2]+$temp[3])/4;
	echo "Temperatura 1: ".$temp[0]."ºC </br>";
	echo "Temperatura 2: ".$temp[1]."ºC </br>";
	echo "Temperatura 3: ".$temp[2]."ºC </br>";
	echo "Temperatura 4: ".$temp[3]."ºC </br>";
	echo "La temperatura mitjà és ".number_format($mitja,1)." ºC </br>";	
 ?>  
</body>
</html>

