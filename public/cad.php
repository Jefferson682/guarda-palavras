<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>
<body>

<section class="container">
    <h1>cadastro</h1>
    <form class="form" action="./php/login.php" method="post">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user">
        <label for="pass">Senha</label>
        <input type="password" name="pass" id="pass">
        <button type="submit" name="btn-cad">cadastrar</button>
    </form>
</section>
    
</body>
</html>