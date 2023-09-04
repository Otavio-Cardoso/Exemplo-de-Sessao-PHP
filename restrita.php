<?php
session_start();
if(isset($_SESSION["user"]) && $_SESSION["user"] != ""){
    if($_SESSION["grau"] != "admin"){
        header("Location: menu.php");
        die();
    }
} else{
    header("Location: login.php");
    die();
}
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
        // put your code here
        ?>
        <h1>Página restrita, parábens vc é um admin</h1>
        <a href="menu.php">Voltar</a>

    </body>
</html>
