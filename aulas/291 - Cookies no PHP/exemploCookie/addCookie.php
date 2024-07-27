<?php 
//Criar Cookie
$nome = 'meuCookie';
$valorCookie = 'O Cookie foi preenchido';
$expiracao = 3600;
setcookie($nome, $valorCookie, time() + $expiracao);
?>

<?php require_once 'nav.php' ?>

<h1>Cookie criado com sucesso!</h1>