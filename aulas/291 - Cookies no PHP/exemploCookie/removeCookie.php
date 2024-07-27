<?php 
//Remover Cookie
$nome = 'meuCookie';
$valorCookie = 'O Cookie foi preenchido';
$expiracao = 3600;
setcookie($nome, $valorCookie, time() - 1);
?>

<?php require_once 'nav.php' ?>

<h1>Cookie removido com sucesso!</h1>