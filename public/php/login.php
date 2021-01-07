<?php
include('conexao.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = "select * from `user` where nome='$user' and senha='$pass'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1):
    header('Location: painel.php');
else:
    header('Location: ../index.php');
endif;