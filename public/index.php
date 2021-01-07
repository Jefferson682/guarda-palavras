<?php
session_start();

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

<form action="./php/login.php" method="post">
Usuario <input type="text" name="user" id="user">
Senha <input type="password" name="pass" id="pass">
<button type="submit" name="btn-entrar">Entrar</button>
</form>
    
</body>
</html>