<?php

session_start();

$email = $_SESSION['email'];

require '../php/conexao.php';

DELETE($email);

header("Location: ../html/homepage.html");