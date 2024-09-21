<?php

// O usuário só pode acessar a página através do formulário, evitar acesso por url (método GET)
if($_SERVER["REQUEST_METHOD"] != 'POST'){
    die("Acesso negado!");
}

// Verifica se os inputs estão setados
$inputEmail = isset($_POST["email"])? $_POST["email"] : null;
$inputSenha = isset($_POST["senha"])? $_POST["senha"] : null;

// Simulação de base de dados
$usuarios = array(
    "email" => "nome@example.com",
    "senha" => 123456
);

if($inputEmail == $usuarios["email"] && $inputSenha == $usuarios["senha"]){
    echo "<h1>Login bem sucedido!</h1>";
}else{
    echo "<h1>Login inválido!</h1>";
}