<?php

//Definindo nome da sessão
session_name('minha_sessao');

//valor passado por argumento: segundos que o cookie vai "viver"
session_set_cookie_params(60*2);

session_start();

require_once 'nav.php';

echo "<h1>Início</h1>";

$_SESSION['nome'] = !empty($_SESSION['nome'])? $_SESSION['nome'] : '-';
$_SESSION['sobrenome'] = !empty($_SESSION['sobrenome'])? $_SESSION['sobrenome'] : '-';

echo "Valor da var. nome: ".$_SESSION['nome'];
echo "<br>";
echo "Valor da var. sobrenome: ".$_SESSION['sobrenome'];