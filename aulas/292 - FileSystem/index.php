<?php

echo "<pre>";

//Constante mágica __DIR__: indica pasta do servidor que está sendo executado o script (caminho de diretórios completo)
echo __DIR__;

echo "<br>";

$file = scandir(__DIR__);
print_r($file);

echo "<br>";
echo "<br>";

echo "<hr>";

//Diretório atual
$file = scandir("./");
print_r($file);

echo "<br>";

//Diretório anterior
$file = scandir("../");
print_r($file);

echo "<hr>";

//Para descobrir se é uma pasta ou um arquivo (listagem de arquivos)
$files = scandir(__DIR__);
echo "São arquivos:"."<br>";
foreach($files as $item){
    if(is_file($item)){
        echo $item."<br>";
    }
}

echo "<hr>";

$files = scandir("../../../");
foreach($files as $item){
    echo is_file($item)? "Arquivo" : "Pasta";
    echo "<br>";
}

echo "<hr>";

//Criar e remover pastas: "mkdir e rmdir: make dir. e remove dir."

//arg. 1) onde a pasta será armazenada; arg. 2) nome da pasta
//----mkdir(__DIR__.'/pasta_nova');----

//É uma boa prática fazer uma verficação antes de criar ou remover qualquer pasta
//Se já existir (mkdir) ou não existir (rdir), o PHP exibirá um aviso no browser

$newDir = __DIR__."/pasta_nova";

//Se nenhum arquivo não existir dentro dessa 'pasta nova'
if(!file_exists($newDir)){
    mkdir($newDir);
    echo "A pasta foi criada!";
}
//Se esse arquivo já existir
if(file_exists($newDir)){
    rmdir($newDir);
    echo "A pasta foi removida!";
}

//Criando pastas de forma recursiva (uma pasta dentro de outra pasta)
if(!file_exists(__DIR__."/pastaRecursiva/pastaFilha")){
    mkdir(__DIR__."/pastaRecursiva/pastaFilha", recursive: true);
}