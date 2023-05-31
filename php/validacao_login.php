<?php

$email = '';
$senha = '';

if (isset($_POST['envio'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require '../php/conexao.php';

    $result =  LOGIN($email, $senha);
    
    echo $result;
}