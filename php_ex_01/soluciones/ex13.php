</html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Estructura de control for</title>
</head>  
<body>
	<?php
	// Genera una taula HTML
	echo "<table border=\"1\">";
	echo "<td><b>NUM</b></td><td><b>log10</b></td><td><b>ln</b></td>";
	for ($num=1;$num<11;$num++) {
		echo "<tr>";
		$log10=number_format(log10($num),2);
		$ln=number_format(log($num),2);
		echo "<td>$num</td><td>$log10</td><td>$ln</td>";
		echo "</tr>";        
    }
    echo "</table>";    
?> 	
</body>
</html>
