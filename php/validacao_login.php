<?php
session_start();

$email = '';
$senha = '';

if (isset($_POST['envio'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require '../php/conexao.php';
    
    if (LOGIN($email, $senha)){
        $_SESSION['email'] = $email;
        header("Location: ../html/sistema.php");
        exit;
    }else{
        print_r('<script>alert("Email e/ou senha Invalidos.")</script>');
    }
}