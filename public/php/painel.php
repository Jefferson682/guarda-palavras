<?php
session_start();

if($_SESSION["logado"]):
    echo "ESSA É A PÁGINA RESTRITA DA APLICAÇÃO";
    
    # LINK EM HTML
    ?>
    <a href="destroy.php">sair</a>
    <?php

    else:
        header('Location: ../index.php');
    endif;