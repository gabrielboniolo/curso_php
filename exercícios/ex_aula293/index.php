<?php

for($i = 1; $i <= 1000; $i++){
    $prod = 3*$i;
    file_put_contents('tabuadaDo3', "3 x {$i} = {$prod}".PHP_EOL,FILE_APPEND);
}