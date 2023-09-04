<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

session_start();
session_destroy();
echo "Sessão destruída com sucesso!<br>";
session_unset();
//session_create_id();
session_start();
session_id(session_regenerate_id());

header("Location: index.php");