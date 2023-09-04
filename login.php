<?php
session_start();
if (isset($_REQUEST["conta"]) && isset($_REQUEST["senha"])){
    $conta = $_REQUEST["conta"];
    $senha = $_REQUEST["senha"];
}
else{
    header("Location: index.php?msgErro=Informe os dados de login");
    die();
}
if ($conta == "admin@admin.com" && $senha == "123"){
    $_SESSION["user"] = $conta;
    $_SESSION["grau"] = "admin";
}
else{
    if ($conta == "user@user.com" && $senha == "abc"){
        $_SESSION["user"] = $conta;
        $_SESSION["grau"] = "user";
    }
    else{
        $_SESSION["user"] = "";
        $_SESSION["grau"] = "";
        header("Location: index.php");
        die();
    }
}

header ("Location: menu.php");
?>