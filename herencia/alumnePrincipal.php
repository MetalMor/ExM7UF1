<html>
    <head>
        <meta content="text/html"; charset="UTF-8" http-equiv="content-type">
    </head>
<body>
<?php

    spl_autoload_register(function ($clase) {
        include $clase.'.php';
    });
    
    $alumne = new Alumne('joel');
    echo $alumne->getNom().'<br/>';
    
    $alumneBecari = new AlumneBecari('joan',100);
    echo $alumneBecari->getNom().'<br/>';
    echo $alumneBecari->getSou().'<br/>';
    
?>
</body>
</html>