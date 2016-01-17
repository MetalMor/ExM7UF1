<HTML>
	
	<HEAD>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<TITLE>Exercici 1</TITLE>
	</HEAD>
	
	<BODY>
		
		<?php
			echo "<b><u>1-1</u></b><BR><BR>";
			echo "Hola món!";
		?>
		
		<BR><BR><BR>
		
		<?php
			echo "<b><u>1-2</u></b><BR><BR>";
			$Str1="Pinxo";
			$Str2="Panxo";
			echo "En ".$Str1." li va dir a en ".$Str2."<BR>";
			$Str1="Panxo";
			$Str2="Pinxo";
			echo "En ".$Str1." li va dir a en ".$Str2."<BR>";
			$Str1="Mas";
			$Str2="Rajoy";
			echo "En ".$Str1." li va dir a en ".$Str2;
		?>
		
		<BR><BR><BR>
		
		<?php
			echo "<b><u>1-3</u></b><BR><BR>";
			$x=10;
			$y=7;
			echo $x." + ".$y." = ";
			echo $x+$y."<BR>";
			echo $x." - ".$y." = ";
			echo $x-$y."<BR>";
			echo $x." * ".$y." = ";
			echo $x*$y."<BR>";
			echo $x." / ".$y." = ";
			echo $x/$y."<BR>";
			echo $x." % ".$y." = ";
			echo $x%$y;
		?>
		
		<BR><BR><BR>
		
		<?php //los parentesis de la variable son para que no buguee
			echo "<b><u>1-4</u></b><BR><BR>";
			echo "El valor és ara ".($valor=8).".<BR>";
			echo "Afegim 2. El valor és ara ".($valor=$valor+2).".<BR>";
			echo "Restem 4. El valor és ara ".($valor=$valor-4).".<BR>";
			echo "Multipliquem per 5. El valor és ara ".($valor=$valor*5).".<BR>";
			echo "Dividim per 3. El valor és ara ".($valor=$valor/3).".<BR>";
			echo "Incrementem valor en un. El valor és ara ".($valor=++$valor).".<BR>";
			echo "Decrementem en un. El valor és ara ".($valor=--$valor);
		?>
		
		<BR><BR><BR>
		
		<?php
			echo "<b><u>1-5</u></b><BR><BR>";
			
			$Esteve;
			$x=28;
			
			echo var_dump(Esteve)."<BR>".print_r(Esteve)."<BR>";
			echo var_dump(x)."<BR>".print_r(x);
		?>
		
		<BR><BR><BR>
		
		<?php
			echo "<b><u>1-6</u></b><BR><BR>";
			$x='cap';
			echo "En $x $x $x el que $x en aquest $x.";
		?>
		
		<BR><BR><BR>
		
		<?php
			echo "<b><u>1-7</u></b><BR><BR>";
			
			$i=0;
			$string="El tipus és ";
			$queEsAixo1="Hola";
			$queEsAixo2=25556.123451158491254;
			$queEsAixo3=true;
			$queEsAixo4=12;
			$queEsAixo5;
			while($i<6){
				$i++;
				switch($i){
					case 1: echo $string.gettype($queEsAixo1).".<BR>"; break;
					case 2: echo $string.gettype($queEsAixo2).".<BR>"; break;
					case 3: echo $string.gettype($queEsAixo3).".<BR>"; break;
					case 4: echo $string.gettype($queEsAixo4).".<BR>"; break;
					case 5: echo $string.gettype($queEsAixo5).".<BR>"; break;
				}
			}
		?>
	</BODY>
	
</HTML>
