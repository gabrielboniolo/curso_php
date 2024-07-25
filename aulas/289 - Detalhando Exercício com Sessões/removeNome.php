<?php 
session_start();

unset($_SESSION['nome']);


require_once 'nav.php';

echo "<h1>Nome removido!</h1>";