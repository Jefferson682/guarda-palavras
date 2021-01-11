<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
    <title>login</title>
</head>
<body>
<section class="container">
    <div class="conteudo">
        <h1 class="titulo">LOGIN</h1>
        <form class="form" action="./php/aut.php" method="post">
            <label for="user"><p>Usuário</p>
            <input class="form-item" type="text" name="user" id="user" required>
            </label>
            <label for="pass"><p>Senha</p>
            <input class="form-item" type="password" name="pass" id="pass" required>
            </label>
            <button class="btn form-item margin-top-2rem" type="submit" name="btn-entrar">ENTRAR</button>
        </form>
            <a href="cad.php"><button class="btn btn-sec form-item" >CADASTRAR NOVO USUÁRIO</button></a>
    </div>
</section>
</body>
</html>