<?php
    require '../php/update.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/sistema_style.css">
        <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
        <script src="../js/script.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <title>Consulta de dados</title>
    </head>

    </body>

        <body>
        <header>
            <h1>PROTECT DADOS</h1>
            <nav>
                <button id="cadeado" class="material-symbols-outlined" onclick="cadeado()">lock</button>
                <button name="update" onclick="clicar()">ATUALIZAR DADOS</button>
                <button name="delete" onclick="deletar()">DELETAR CONTA</button>
                <a href="login.php"><button>SAIR</button></a>
            </nav>
        </header>

        <main>
            <form id="tabela-consulta" method="post"></form>
        </main>
    <body>
</html>