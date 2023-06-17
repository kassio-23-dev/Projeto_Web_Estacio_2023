<?php
    require '../php/singup.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/cadastro_style.css">
        <title> Cadastro de Clientes</title>
    </head>
    <body>
        <div class="container">
            <legend><b>Fórmulário de Clientes</b></legend>
            <form action="" method="post">   
                
                <input type="text" name="nome" id="nome" placeholder="NOME COMPLETO" required>

                <input type="email" name="email" id="email" placeholder="EMAIL" required>

                <input type="tel" name="telefone" id="telefone" placeholder="TELEFONE" required>
                
                <div id="SEXO">
                    <label for="feminino">FEMININO</label>
                    <input type="radio" id="feminino" name="genero" value="F" required>
                    <label for="masculino">MASCULINO</label>
                    <input type="radio" id="masculino" name="genero" value="M" required>
                    <label for="outro">OUTRO</label>
                    <input type="radio" id="outro" name="genero" value="O" required>
                </div>
    
                <input type="date" name="data_nascimento" id="data_nascimento" required>

                <input type="text" name="endereco" id="endereco" placeholder="ENDEREÇO" required>

                <input type="password" name="senha" id="Senha" placeholder="SENHA" required>

                <input type="password" name="senha_confirm" id="senha_confirm" placeholder="CONFIRMAÇÂO DE SENHA" required>
    
                <input type="submit" name="submit" id="submit" value="ENVIAR">
            </form>
        </div>
    </body>
</html>