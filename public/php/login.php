<?php
require_once('conexao.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

echo "seu usuario é".$user." e sua senha é".$pass;
