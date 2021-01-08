<?php
require('config.php');
require('functions.php');

#verificação se veio dado via POST;
if(empty($_POST['user']) || empty($_POST['pass'])) {
    header('Location: ../index.php');
    exit();
}

#proteção contra SQLinjection;
//$user = mysqli_real_escape_string(DB_Conn(), $_POST['user']);
//$pass = mysqli_real_escape_string(DB_Conn(), $_POST['pass']);

$user = 'Jefferson';
$pass = '123';

if (DB_CadUser($user, $pass)){
    
}