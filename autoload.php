<?php

spl_autoload_register(function ($clase) { 
    include $clase . '.php'; 
}); //autocarga de clases en la misma carpeta

?>