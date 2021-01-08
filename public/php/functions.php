<?php

# FUNÇÕES
# Conexão com o banco de dados

function DB_Conn(){
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATE) or die (mysqli_connect_error());
}

function DB_Close($conn){
    mysql_close($conn);
}

# CADASTRAR USUÁRIO

function DB_CadUser($user, $pass){
    $query = "INSERT INTO `GB_user` (`id`, `nome`, `senha`) VALUES (NULL, {$user}, MD5('{$pass}'))";
    $result = mysqli_query(DB_Conn(), $query);
    return $result;
}

# AUTENTICAR LOGIN

function DB_aut($user, $pass){
    $query = "SELECT * FROM `DB_user` WHERE `nome` = {$user}";
}

# CADASTRAR PALAVRAS

# SELECIONAR PALAVRAS

# EDITAR PALAVRAS