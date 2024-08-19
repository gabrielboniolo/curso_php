<?php

global $cor;

//$outraCor = "green";
$cor = "red";

executa();

function executa(){
   echo $GLOBALS["cor"];
   //echo $outraCor;
}