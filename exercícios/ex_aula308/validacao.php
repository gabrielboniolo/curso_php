<?php

if(!defined("VALIDA")){
    header("Location: ./index.php");
}


$n1 = $_POST['n1'];
$n2 = $_POST['n2'];


echo $n1 * $n2;
