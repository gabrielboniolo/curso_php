<?php
//Tamanho do arquivo
echo filesize('teste.txt')." bytes";

echo "<hr>";

//Informações de um arquivo
$info = pathinfo('teste.txt');
print_r($info);

//Criando arquivo
file_put_contents("ArquivoNovo.txt", "Conteúdo do arquivo novo.".PHP_EOL);

//Adicionando conteúdo no mesmo arquivo
//PHP_EOL = Quebra de linha
//FILE_APPEND = Adicionar conteúdo/Acrescentar
file_put_contents("ArquivoNovo.txt", time().PHP_EOL, FILE_APPEND);