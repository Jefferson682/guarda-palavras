<?php
include('conexao.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = "select * from `user` where nome='$user' and senha='$pass'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

var_dump($result);
echo "<br>";

print_r($result);
echo "<br>";

print_r($query);
echo "<br>";

var_dump($row);

