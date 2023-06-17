<?php

if(isset($_POST['submit'])){

    if ($_POST['senha'] == $_POST['senha_confirm']){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $dt_nasc = $_POST['data_nascimento'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];

        require_once '../php/conexao.php';

        CREATE($nome, $email, $endereco, $senha, $sexo, $dt_nasc, $telefone);

        header("Location: ../html/homepage.html");
        
    }else{
        echo '<script>alert("As senhas não conferem, tente novamente!")</script>';
    }    
}