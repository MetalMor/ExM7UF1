<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Exercici-01 PHP</title>
</head>  
<body>  
 <?php
 function presentaCodiFont($codiFont){
     if(!file_exists($codiFont)){
        return -1;
     }
     echo "<B>$codiFont<HR><FONT size = 3>";
     highlight_file($codiFont);
     echo "</font></B><P>";
     echo "<A href=\"$codiFont\">Executa-ho</a><HR>";
     return 0;
 }
 presentaCodiFont("presentaCodi.php");
 presentaCodiFont("DAW2_JoelGarciaFdez_ex02.php");

?>  
</body>
</html>
