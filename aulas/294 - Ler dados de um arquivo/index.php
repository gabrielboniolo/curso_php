<?php

//Acessa o arquivo para leitura
$file = fopen('texto.txt', 'r');

//Enquanto NÃO chegar ao final do arquivo, imprimir linha
while(!feof($file)){
    echo nl2br(fgets($file));
}

fclose($file);


// //Acessa o arquivo para escrita
// $file = fopen('texto.txt', 'w');

// //Enquanto NÃO chegar ao final do arquivo, imprimir linha
// while(!feof($file)){
//     echo nl2br(fputs($file));
// }

// fclose($file);