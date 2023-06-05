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
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src='../js/script.js'></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="dados">
                    <form id="loginForm" action="" method="post">
                        <h1> Entrar </h1 >
                        <input id="email" type =" text " placeholder =" Email " name="email" value="">
                        <br> <br>
                        <input id="senha" type  = "password" placeholder =" Senha " name="senha" value="">
                        <br> <br><br><br>
                        <button id= "envio" type="submit" name="envio"><b>Enviar</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
