<HTML>
	<HEAD>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<TITLE>Exercici 2</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<b><u>3-1</u></b><BR><BR>";
			if (!isset($_POST['submit'])){
		?>     
		<form method="post" action="ex03-2.php">
			Si us plau, entreu la vostra ciutat preferida:  <br />
			<input type="text" name="ciutat" />
			<p />
			<input type="submit" name="submit" value="Ves" />
		</form>
		<?php
		}else{
			$ciutat = $_POST['ciutat'];
			echo "La teva ciutat preferida és $ciutat.";
		}
		?>
		
		<BR><BR><BR>
		
		<?php
			
		?>
		
	</BODY>
</HTML>
