<?php
session_start();
require_once('config.php');
require_once('functions.php');

# Verificar se é cadastro ou login
    ##############################################
    # LOGIN
    ##############################################
if(isset($_POST['btn-entrar'])):
    # Verificação se veio dado via POST corretamente;
    if(empty($_POST['user']) || empty($_POST['pass'])):
        echo "PREENCHA TODOS OS CAMPOS";
        // header('Location: ../index.php');
        exit();
    endif;

    # Abrindo conexao com o banco e aferindo variaveis
    $link = DB_Conn();
    $user = mysqli_real_escape_string($link, $_POST['user']);
    $pass = mysqli_real_escape_string($link, $_POST['pass']);
    // # Login
    DB_login($user, $pass, $link);
    DB_Close($link);

    ##############################################
    # CADASTRO
    ##############################################
    elseif(isset($_POST['btn-cad'])):
        # Verificação se veio dado via POST corretamente;
        if(empty($_POST['user']) || empty($_POST['pass'])):
            echo "PREENCHA TODOS OS CAMPOS";
            // header('Location: ../index.php');
            exit();
        endif;

        ## Abrindo conexao com o banco e aferindo variaveis
        $link = DB_Conn();
        $user = mysqli_real_escape_string($link, $_POST['user']);
        $pass = mysqli_real_escape_string($link, $_POST['pass']);

        # Cadastro
        DB_CadUser($user, $pass, $link);
        DB_Close($link);

endif;





# Proteção contra SQLinjection;
    // $user = $_POST['user'];
    // $pass = md5($_POST['pass']);

# Abre e fecha conexão com o BD;


# Aqui comandos com o banco.
