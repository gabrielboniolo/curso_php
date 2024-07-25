<?php
session_name('minha_sessao');
session_set_cookie_params(60*2);
session_start();

//remove todas as variáveis da sessão
session_unset();

//destrói a sessão
session_destroy();


require_once 'nav.php';

echo "<h1>Sessão Destruída!</h1>";