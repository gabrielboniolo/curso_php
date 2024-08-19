<?php

echo "Nome do script em execução:";
echo "<br>";
echo $_SERVER['PHP_SELF'];

echo "<br><br>";

echo"Endereço IP do servidor:";
echo "<br>";
echo $_SERVER["SERVER_ADDR"];

echo "<br><br>";

echo"Nome do servidor:";
echo "<br>";
echo $_SERVER["SERVER_NAME"];

echo "<br><br>";

echo"Informações do sistema do servidor:";
echo "<br>";
echo $_SERVER["SERVER_SOFTWARE"];

echo "<br><br>";

echo"Informações do protocolo usado:";
echo "<br>";
echo $_SERVER["SERVER_PROTOCOL"];

echo "<br><br>";

echo"Pasta raiz da aplicação:";
echo "<br>";
echo $_SERVER["DOCUMENT_ROOT"];

echo "<br><br>";

echo "Método utilizado:";
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];


