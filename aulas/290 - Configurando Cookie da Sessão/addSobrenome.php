<?php
session_name('minha_sessao');
session_set_cookie_params(60*2);
session_start();

$_SESSION['sobrenome'] = 'Boniolo';


require_once 'nav.php';

echo "<h1>Sobrenome adicionado!</h1>";