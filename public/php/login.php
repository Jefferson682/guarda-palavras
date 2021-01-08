<?php
require('config.php');
require('functions.php');

#verificação se veio dado via POST;
if(empty($_POST['user']) || empty($_POST['pass'])) {
    header('Location: ../index.php');
    exit();
}

    # Proteção contra SQLinjection;
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);

# Abre e fecha conexão com o BD;
$conexao = DB_Conn();
    # Aqui comandos com o banco.
    $result = DB_aut($user, $pass);

    
    var_dump($result);
