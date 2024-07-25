<?php 
session_start();

unset($_SESSION['sobrenome']);


require_once 'nav.php';

echo "<h1>Sobrenome removido!</h1>";