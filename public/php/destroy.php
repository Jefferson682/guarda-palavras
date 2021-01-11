<?php

# deletando sessao logado;

session_start();
unset($_SESSION["logado"]);
header('Location: ../index.php');