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

    if($login[0] != ''){
        $script = true;
    }else{
        $script = false;
    }

    return $script;

    mysqli_close($set_conection);
}

function CREATE($nome, $email, $endereco, $senha, $sexo, $data_de_nascimento, $telefone){
    $set_conection = GET_CONECTION();

    if (!VERIFICACAO_DE_EMAIL($email, $set_conection)){

        $queries = array('INSERT INTO cadastro (nome_completo, email, endereco, senha, sexo, data_de_nascimento) VALUES (\''.$nome.'\', \''.$email.'\', \''.$endereco.'\', \''.$senha.'\', \''.$sexo.'\', \''.$data_de_nascimento.'\');',
                     'SELECT id_cadastro FROM cadastro WHERE email = \'' . $email . '\' AND senha = \'' . $senha . '\';'
                    );

        $sql = array(mysqli_query($set_conection, $queries[0]));

        $sql[1] = mysqli_query($set_conection, $queries[1]);

        $row = $sql[1]->fetch_row();

        $queries[] = 'INSERT INTO contato (id_cadastro, telefone) VALUES ('. $row[0] .', \''. $telefone .'\');';

        $sql[2] = mysqli_query($set_conection, $queries[2]);
        
    }else{
        echo '<script> alert("E-mail já cadastrado"); </script>';
    }

    mysqli_close($set_conection);
}

function READ($email){
    $set_conection = GET_CONECTION();

        $query1 = 'SELECT * FROM cadastro WHERE email = \'' . $email . '\';';

        $sql1 = mysqli_query($set_conection, $query1);

        $consulta = $sql1->fetch_assoc();

        $query2 = 'SELECT telefone FROM contato WHERE id_cadastro = \'' . $consulta['id_cadastro'] . '\';';

        $sql2 = mysqli_query($set_conection, $query2);

        $telefone = $sql2->fetch_assoc();

        $consulta['telefone'] = $telefone['telefone'];

        return $consulta;

    mysqli_close($set_conection);
}

function UPDATE($email, $tabela, $coluna, $valor){
    $set_conection = GET_CONECTION();

    $query1 = 'SELECT id_cadastro FROM cadastro WHERE email = \'' . $email . '\';';

    $sql = array('QueryParaPegarO_Id' => mysqli_query($set_conection, $query1));

    $resultado = $sql['QueryParaPegarO_Id']->fetch_assoc();

    $query2 = 'UPDATE ' . $tabela . ' SET ' . $coluna . '= \'' . $valor . '\'' . ' WHERE id_cadastro = ' . $resultado['id_cadastro'] . ';';

    $sql['AlteracaoDeDados'] = mysqli_query($set_conection, $query2);

    mysqli_close($set_conection);
}

function DELETE($email){
    $set_conection = GET_CONECTION();

    $query1 = 'SELECT id_cadastro FROM cadastro WHERE email = \'' . $email . '\';';

    $sql = array('QueryParaPegarO_Id' => mysqli_query($set_conection, $query1));

    $resultado = $sql['QueryParaPegarO_Id']->fetch_assoc();

    $query2 = 'DELETE FROM contato WHERE id_cadastro = \'' . $resultado['id_cadastro'] . '\';';

    $sql['QueryParaApagarO_telefone'] = mysqli_query($set_conection, $query2);

    $query3 = 'DELETE FROM cadastro WHERE id_cadastro = \'' . $resultado['id_cadastro'] . '\';';

    $sql['QueryParaApagarO_cadastro'] = mysqli_query($set_conection, $query3);

    mysqli_close($set_conection);
}

function VERIFICACAO_DE_EMAIL($email, $conection){

    $query = 'SELECT email FROM cadastro WHERE email = \'' . $email . '\';';

    $sql = mysqli_query($conection, $query);
    
    $login[] = $sql->fetch_assoc();

    if($login[0] != ''){
        $return = true;
    }else{
        $return = false;
    }

    return $return;
}
