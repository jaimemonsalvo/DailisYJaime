<?php


function usuario_autenticado(){

    if (!revisar_usuario()) {
        header('Location:login.php');
            exit();
    }
}

function revisar_usuario(){

    return isset($_SESSION['email']);
}

session_start();
usuario_autenticado();
