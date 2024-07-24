<?php 

//Include: se o arquivo não existir, será exibido um aviso e o programa continuará a execução

//Require: se o arquivo não existir, será exibido um erro e o programa é encerrado


//exemplos:

//include 'teste1.php';
//require 'teste2.php';

//----------------------------

//include_once 'teste3.php';
//include_once 'teste3.php';

//Diferença entre include padrão e include_once (ou require/require_once): o arquivo é chamado apenas uma vez no "_once".

//include 'teste3.php';
//include 'teste3.php';

//require_once 'teste4.php';
//require_once 'teste4.php';


//----------------------------

$nomes = require_once 'dados.php';

echo "<pre>";
print_r($nomes);