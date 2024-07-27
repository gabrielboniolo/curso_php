<?php
//Verificando se há um cookie

$valorCookie = '[não há valor no cookie]';

if(!empty($_COOKIE['meuCookie'])) {
    $valorCookie = $_COOKIE['meuCookie'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies PHP</title>
</head>
<body>
    <?php require_once 'nav.php'?>
    <h3>Início</h3>
    <p>Valor do cookie: <?php echo $valorCookie ?></p>
</body>
</html>