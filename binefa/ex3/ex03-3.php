<?php
	// Si no s'ha premut el botó, es va al formulari inicial
	if (!isset($_POST['submit'])){
?>     
	<form method="post" action="ex03-2.php">
		<!--Assegureu-vos que entreu el nom correcte de l'arxiu -->
		Si us plau, entreu la vostra ciutat preferida::  <br />
		<input type="text" name="ciutat" />
		<p />
		<input type="submit" name="submit" value="Ves" />
	</form>
<?php
// Si s'ha premut el botó es processa l'entrada
}else{
	//Es recull el valor de la cadena 'ciutat'
	$ciutat = $_POST['ciutat'];
	echo "La teva ciutat favorita és $ciutat.";
}
?>
