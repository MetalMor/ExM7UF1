</html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Estructura de control for</title>
</head>  
<body>
	<?php
	// Genera una taula HTML
	echo "<table border=\"1\">";
	for ($fila=1;$fila<6;$fila++) {
		echo "<tr>";
		for ($col=1;$col<6;$col++) {
			$x=$col*$fila;
			echo "<td>$x</td>";	
		}
		echo "</tr>";        
    }
    echo "</table>";    
?> 	
</body>
</html>
