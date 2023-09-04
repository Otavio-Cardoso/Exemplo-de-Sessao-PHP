<?php
session_start();
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if (isset($_SESSION["user"]) && $_SESSION["user"] != ""){
                echo "Bem vindo, " . $_SESSION["user"] . "!<br>";
                echo "Você é um usuário " . $_SESSION["grau"] . ".<br>";
            }
            else{
                header("Location: index.php");
                die();
            }
        ?>
        <a href="destroiSessao.php">Destruir sessão</a>
        <br>
        <a href="restrita.php">Página restrita</a>
        <br>
        <a href="index.php">Voltar</a>
    </body>
</html>
