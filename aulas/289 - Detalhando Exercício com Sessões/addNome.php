<?php 
session_start();

$_SESSION['nome'] = 'Gabriel';


require_once 'nav.php';

echo "<h1>Nome adicionado!</h1>";