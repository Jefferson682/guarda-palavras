<?php

$host = 'c2edfda601be';
$usuario = 'root';
$senha = '123';
$db = 'ambiente';


$conexao = mysqli_connect($host, $usuario, $senha, $db);

if(mysqli_connect_error()):
    echo " aconteceu um erro: <br>".mysqli_connect_error();
endif;