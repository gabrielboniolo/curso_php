<?php

//A session_start() deve ser a primeira chamada no script, não deve ter outro output anterior a ela.

session_start();

require_once 'nav.php';

echo "<h1>Início</h1>";

$_SESSION['nome'] = !empty($_SESSION['nome'])? $_SESSION['nome'] : '-';
$_SESSION['sobrenome'] = !empty($_SESSION['sobrenome'])? $_SESSION['sobrenome'] : '-';

echo "Valor da var. nome: ".$_SESSION['nome'];
echo "<br>";
echo "Valor da var. sobrenome: ".$_SESSION['sobrenome'];