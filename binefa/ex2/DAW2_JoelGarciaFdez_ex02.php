<HTML>
	<HEAD>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<TITLE>Exercici 2</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "<b><u>2-1</u></b><BR><BR>";
			$agost="És agost, i per això fa tanta calor.";
            $noAgost="No és agost, almenys no estem patint tanta calor."; 
            if(date("m")==8) echo $agost;
            else echo $noAgost;
		?>
		
		<BR><BR><BR>
		
		<?php
			echo "<b><u>2-2</u></b><BR><BR>";
			$c = 0;
            $abc = "abc ";
            $xyz = "zyx ";
            while ($c < 9) {
                $c++;
                echo $abc;
            }
            echo "<br/>";
            $c = 0;
            do {
            echo $xyz;
            $c++;
            } while ($c < 9);
            
            echo "<br/>";
            $c = 0;            
            for ($c=1;$c < 10; $c++)
            echo "$c ";
             
            echo "<br/>";
            $c = 0;    
            $x = 1;        
            for ($c='A';$c < 'G'; $c++){
            echo "$x.Article $c<br/> ";
            $x++;
            }
		?>
		
		<BR><BR><BR>
		
		<?php
			echo "<b><u>2-3</u></b><BR><BR>";
            for ($a=1; $a<=12; $a++){
                  $t = $a * $a;
                  echo "$a * $a = $t<br>\n";
            }
        ?>
        
        <BR><BR><BR>
        
        <?php
			echo "<b><u>2-4</u></b><BR><BR>";
            echo "<table>";
            for ($f=1; $f<=7; $f++){
              echo "<tr>\n";
              for ($c=1; $c<=7; $c++){
                $x=$c*$f;
                echo "<td>$x</td>\n";
              }
              echo "</tr>";
            }
            echo "</table>";
        ?>
	</BODY>
</HTML>
