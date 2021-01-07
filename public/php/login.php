<?php
include('conexao.php');

#verificação se veio dado via POST;
if(empty($_POST['user']) || empty($_POST['pass'])) {
    header('Location: ../index.php');
    exit();
}

#proteção contra SQLinjection;
$user = mysqli_real_escape_string($conexao, $_POST['user']);
$pass = mysqli_real_escape_string($conexao, $_POST['pass']);

$query = "select * from `user` where nome='$user' and senha='$pass'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1):
    header('Location: painel.php');
    exit()
else:
    header('Location: ../index.php');
    exit()
endif;