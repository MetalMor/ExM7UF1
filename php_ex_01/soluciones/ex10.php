</html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Estructura de control if..else</title>
</head>  
<body>  
<?php
	date_default_timezone_set('Europe/Andorra');
	$hora=date("H:i:s");
	$hora=$hora;
	echo "Hora del fus horari local del servidor: $hora</br>";
	if ($hora<15) {
		echo "Encara no és hora d'estar a la feina</br>";
	}
	elseif (($hora>=15) and ($hora<=21)) {
		echo "Hauries d'estar a la feina</br>"; 
	}
	else {
		"És hora d'estar a casa sopant o dormint</br>";
	}
?> 
</body>
</html>
