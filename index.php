<?php
//funcao para retomar uma sessão
session_start();
if (!isset($_SESSION["visitas"])) {
    $_SESSION["visitas"] = 0;
    $_SESSION["visitas"]++;
} else {
    $_SESSION["visitas"]++;
}

?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    
    ?>
    <!--
    <a href="destroiSessao.php">Destruir sessão</a>
    -->
    <form action = "login.php" method = "POST">
        <fieldset>
            <legend>Autenticação</legend>
            <div>
                <label for="conta"> Conta: </label>
                <input type = "email" name = "conta" value = "" placeholder = "Ex: abc@abc.com.br" required = "required" id = "conta" />
            </div>
            <div>
                <label for="senha" > Senha: </label>
                <input type = "password" name = "senha" value = "" placeholder = "Ex: 123456" required = "required" id = "senha" />
            </div>
            <br>
            <div>
                <input type = "submit" value = "Entrar" />
            </div>
        </fieldset>
    </form>

    <?php
    if (isset($_REQUEST["msgErro"])){
        echo "<span style = 'color: red;'>", $_REQUEST["msgErro"], "</span>";
    }
    ?>
            
    </body>

</html>