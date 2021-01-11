<?php
# FUNÇÕES

# Conexão com o banco de dados
function DB_Conn(){
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATE) or die (mysqli_error($conn));
    mysqli_set_charset($conn, DB_CHARSET) or die (mysqli_error($conn));
    return $conn;
}
function DB_Close($conn){
    mysqli_close($conn) or die (mysqli_error($conn));
}

# CADASTRAR USUÁRIO
function DB_CadUser($user, $pass, $link){
    $query = "INSERT INTO `GP_user` (`id`, `nome`, `senha`) VALUES (NULL, '{$user}', MD5('{$pass}'))";
    $result = mysqli_query($link, $query);
    header('Location: ../cad_sucesso.php');
}

# AUTENTICAR LOGIN
function DB_login($user, $pass, $link){
    $query = "SELECT * FROM `GP_user` WHERE `nome` = '{$user}' AND `senha` = MD5('{$pass}')";
    $result = mysqli_query($link, $query);
    $row = mysqli_num_rows($result);
        if($row == 1):
            $_SESSION["logado"] = $user;
            header('Location: painel.php');
            exit();
        else:
            echo "usuario não cadastrado";
            exit();
        endif;
}

# CADASTRAR PALAVRAS

# SELECIONAR PALAVRAS

# EDITAR PALAVRAS