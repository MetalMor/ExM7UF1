<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head><meta charset="utf-8" content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>
	Files
</title></head><body>
	<?php
		include_once "lang.php";
#		echo $language;
	?>
<div style="text-align: center;"><span style="font-family: Helvetica,Arial,sans-serif;">
	<?php
		echo szSelectLanguage($language);
	?>
	</span><br style="font-family: Helvetica,Arial,sans-serif;"><BR>
	<big style="font-weight: bold;"><big><big><big><span style="font-family: Helvetica,Arial,sans-serif;">
	<?php
	 $arxiu = "data_$language.txt";
	 #echo $arxiu;
     $contingut = file_get_contents($arxiu);
     $trosText = explode("\n", $contingut);
	?>

	<?php
	/*
	switch($language){
		case "ca" : echo "Benvinguts";
					break;
		case "es" : echo "Bienvenidos";
					break;
		default : echo "Welcome";
	}
	* */
	echo $trosText[0];
	?>
		</span></big></big></big></big><br style="font-family: Helvetica,Arial,sans-serif;">
</div>
<br style="font-family: Helvetica,Arial,sans-serif;">
<a href="http://www.binefa.cat/php/daw/"><span style="font-family: Helvetica,Arial,sans-serif;">
	<?php
	/*switch($language){
		case "ca" : echo "Adreça principal";
					break;
		case "es" : echo "Dirección principal";
					break;
		default : echo "Main Address";
	}
	* */
	echo $trosText[1];
	?>
	</span></a><br style="font-family: Helvetica,Arial,sans-serif;">
<br style="font-family: Helvetica,Arial,sans-serif;">
<div style="text-align: center;"><span style="font-family: Helvetica,Arial,sans-serif;">
	<?php
	/*switch($language){
		case "ca" : echo "peu";
					break;
		case "es" : echo "pie";
					break;
		default : echo "foot";
	}*/
	echo $trosText[2];
	?>
	</span><br>
</div>
</body></html>
