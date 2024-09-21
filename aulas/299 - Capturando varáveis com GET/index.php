<?php

//Query string

//URL+arquivo.php?varDoGet=valor1&var2DoGet=valor2

//$valGet = isset($_GET["fruta"])? $_GET["fruta"] : null;

$valGet = $_GET["fruta"] ?? "(Não existe valor em fruta)";

echo "Valor do GET (fruta): ".$valGet;