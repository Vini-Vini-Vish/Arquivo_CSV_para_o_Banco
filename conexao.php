<?php 

    session_start();

    $localhost = "localhost";
    $user = "root";
    $pass = "";
    $banco = "intuitivecare";

    //conexão MYSQL Estrutural
    $conecta = mysqli_connect($localhost, $user, $pass, $banco);
    mysqli_set_charset($conecta, "utf_8");
    
?>