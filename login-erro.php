<?php
    $getVariable  = explode("=", $_SERVER["REQUEST_URI"]);
    $erro = (int)$getVariable['1'];

    if($erro == 5){
        echo "<span style = 'color:red;font-size:12px;'>Usuário ou Senha incorretos</span>"
    }
?>