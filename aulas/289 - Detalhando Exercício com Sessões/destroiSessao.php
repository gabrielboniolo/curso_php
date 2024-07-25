<?php 
session_start();

//session_unset();

session_destroy();


require_once 'nav.php';

echo "<h1>Sessão Destruída!</h1>";