<?php
    require '../php/validacao_login.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela de login</title>
        <link rel="stylesheet" href="../css/login_style.css">
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src='../js/script.js'></script>
    </head>

    <body>
        <div class="container">
            <label for="form-login">ENTRAR</label>
            <form id="loginForm" name="form-login" action="" method="POST">
                <input name="email" type="email" placeholder ="  Email" >
                <input name="senha" type="password" placeholder="  Senha" >
                <button name="envio" id="envio" type="submit">Enviar</button>
                <span>Ainda não é cadastrado?</span>
                <button><a href="cadastro.php">CADASTRE-SE</a></button>
            </form>
        </div>
    </body>
</html>
