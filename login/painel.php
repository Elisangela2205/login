<?php session_start(); ?>
<html>
    <head>
        <title> Sistema de login</title>
</head>
<body>
    <h1>painel do sistema</h1>
    <?php
    echo"<br> Seja bem vindo(a)".$_SESSION["nome"];

    echo"<hr>Menu:";
    if ($_SESSION["perfil"] == "adm"){
        include_once'menu_adm.php';
    }else{
        include_once'menu_usuario.php';
    }
    
   
       ?>
    </body>
</html>