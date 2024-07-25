<?php 
session_start();

$_SESSION['sobrenome'] = 'Boniolo';


require_once 'nav.php';

echo "<h1>Sobrenome adicionado!</h1>";