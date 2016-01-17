<HTML>
	<HEAD>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<TITLE>Exercici 2</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<b><u>3-1a</u></b><BR><BR>";
			echo    "<form action='ex0301b.php' method='post'>";
			echo    "<p>Escrive tu ciudad: <input type='text' name='ciutat' /></p>";
			echo    "<p><input type='submit' /></p>";
			echo    "</form>";
		?>
		
		<BR><BR><BR>
		
		<?php 
			echo "<b><u>3-1b</u></b><BR><BR>";
			$ciutat = $_POST['ciutat'];
			echo $ciutat;
		?>
		
		<BR><BR><BR>
		
		<?php
			echo "<b><u>3-2</u></b><BR><BR>";
			if (!(isset($_POST['ciutat']))) {
		?>
		<form action='ex0302.php' method='post'>;
			<p>Escriu el nom d'una ciutat: <input type='text' name='ciutat' /></p>
			<p><input type='submit' /></p>
		</form>
		<?php
			}else echo "La ciutat triada és: ".$_POST['ciutat'].".";
		?>		
		
		<BR><BR><BR>
		
		<?php
			echo "<b><u>3-3</u></b><BR><BR>";
			if (!(isset($_POST['dia']))) {
		?>
		<form action='ex0303.php' method='post'>
			<p>Escriu el nom del dia: <input type='text' name='dia' /></p>
			<p><input type='submit' /></p>
		</form>

		<?php
			}elseif($_POST['dia']=="dilluns"){
				echo "El ".$dia." en compra llums";
			}
			elseif($_POST['dia']=="dimarts"){
				echo "El ".$dia." en compra naps";
			}
			elseif($_POST['dia']=="dimecres"){
				echo "El ".$dia." en compra nespres";
			}
			elseif($_POST['dia']=="dijous"){
				echo "El ".$dia." en compra nous";
			}
			elseif($_POST['dia']=="divendres"){
				echo "El ".$dia.", faves tendres";
			}
			elseif($_POST['dia']=="disabte"){
				echo "El ".$dia.", tot s'ho gasta";
			}
			elseif($_POST['dia']=="diumenge"){
				echo "El ".$dia.", tot s'ho menja";
			}
			else{
				echo "\"".$dia."\" no és un dia de la setmana.";
			}
		?>
		
		<BR><BR><BR>
		
		<?php
			echo "<b><u>3-4</u></b><BR><BR>";
			if(!(isset($_POST['dia']))){
		?>
		<form action='ex0303.php' method='post'>;
			<p>Escriu el nom del dia: <input type='text' name='dia' /></p>
			<p><input type='submit' /></p>
		</form>
		<?php
			}else switch ($_POST['dia']) {
				case 'dilluns':
					echo "El ".$dia." en compra llums";
					break;
				case 'dimarts':
					echo "El ".$dia." en compra naps";
					break;
				case 'dimecres':
					echo "El ".$dia." en compra nespres";
					break;
				case 'dijous':
					echo "El ".$dia." en compra nous";
					break;
				case 'divendres':
					echo "El ".$dia.", faves tendres";
					break;
				case 'disabte':
					echo "El ".$dia.", tot s'ho gasta";
					break;
				case 'diumenge':
					echo "El ".$dia.", tot s'ho menja";
					break;
				default:
					echo "\"".$dia."\" no és un dia de la setmana.";
					break;
			}
		?>
	</BODY>
</HTML>
