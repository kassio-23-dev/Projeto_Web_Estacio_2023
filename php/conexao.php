<?php

$host = 'localhost';
$user = 'root';
$password = 'admin';
$database = 'projeto_web_19_06_23';

function GET_CONECTION(){

    global $host, $user, $password, $database;

    if(mysqli_connect($host, $user, $password, $database)){
        return mysqli_connect($host, $user, $password, $database);
    }else{
        echo '<script> alert("Não foi possivel conectar com a Base de Dados.") </script>';
    }

}

function LOGIN($email, $senha){
    $set_conection = GET_CONECTION();

    $query = 'SELECT email, senha FROM cadastro WHERE email = \'' . $email . '\' AND senha = \'' . $senha . '\';';

    $sql = mysqli_query($set_conection, $query);
    
    $login[] = $sql->fetch_assoc();

    $script = '';

    if($login[0] != ''){
        $script = '<script>alert("Sucesso!")</script>';
    }else{
        $script = '<script>alert("Email e/ou senha Invalidos.")</script>';
    }

    return $script;

    mysqli_close($set_conection);
}

function CREATE(){
    $set_conection = GET_CONECTION();

    mysqli_close($set_conection);
}

function READ(){
    $set_conection = GET_CONECTION();

    mysqli_close($set_conection);
}

function UPDATE(){
    $set_conection = GET_CONECTION();

    mysqli_close($set_conection);
}

function DELETE(){
    $set_conection = GET_CONECTION();

    mysqli_close($set_conection);
}
