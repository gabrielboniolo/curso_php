<?php
session_name('minha_sessao');
session_set_cookie_params(60*2);
session_start();

unset($_SESSION['sobrenome']);


require_once 'nav.php';

echo "<h1>Sobrenome removido!</h1>";