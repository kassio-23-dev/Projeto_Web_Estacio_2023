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

function SING_UP($nome, $email, $endereco, $senha, $sexo, $data_de_nascimento, $telefone){
    $set_conection = GET_CONECTION();

    $queries = array('INSERT INTO cadastro (nome_completo, email, endereco, senha, sexo, data_de_nascimento) VALUES (\''.$nome.'\', \''.$email.'\', \''.$endereco.'\', \''.$senha.'\', \''.$sexo.'\', \''.$data_de_nascimento.'\');',
                     'SELECT id_cadastro FROM cadastro WHERE email = \'' . $email . '\' AND senha = \'' . $senha . '\';'
                    );

    $sql = array(mysqli_query($set_conection, $queries[0]));

    $sql[1] = mysqli_query($set_conection, $queries[1]);

    $row = $sql[1]->fetch_row();

    $queries[] = 'INSERT INTO contato (id_cadastro, telefone) VALUES ('. $row[0] .', \''. $telefone .'\');';

    $sql[2] = mysqli_query($set_conection, $queries[2]);

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
