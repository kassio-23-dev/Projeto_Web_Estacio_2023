<?php

session_start();

$email = $_SESSION['email'];

$colunas = array('nome_completo', 'email', 'endereco', 'senha', 'sexo', 'data_de_nascimento', 'telefone');

$nome_novo = '';
$email_novo = '';
$telefone_novo = '';
$sexo_novo = '';
$dt_nasc_novo = '';
$endereco_novo = '';
$senha_novo = '';

if(isset($_POST['update-inner'])){

    $nome_novo = $_POST['nome'];
    $senha_novo = $_POST['senha'];
    $email_novo = $_POST['email'];
    $telefone_novo = $_POST['telefone'];
    $sexo_novo = $_POST['sexo'];
    $dt_nasc_novo = $_POST['data-de-nascimento'];
    $endereco_novo = $_POST['endereco'];

    $dados_atualizados = array($nome_novo, $email_novo, $endereco_novo, $senha_novo, $sexo_novo, $dt_nasc_novo, $telefone_novo);
    
    require '../php/conexao.php';

    $consulta = READ($email);

    for($i = 0; $i < 7; $i++){
        if($consulta[$colunas[$i]] != $dados_atualizados[$i]){
            if($i == 6){
                UPDATE($email, 'contato', $colunas[$i], $dados_atualizados[$i]);
            }else{
                if($i == 1){
                    UPDATE($email, 'cadastro', $colunas[$i], $dados_atualizados[$i]);
                    $_SESSION['email'] = $dados_atualizados[$i];
                    $email = $_SESSION['email'];
                }else{
                    UPDATE($email, 'cadastro', $colunas[$i], $dados_atualizados[$i]);
                }
            }
        }
    } 
}