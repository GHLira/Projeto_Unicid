<?php
session_start();
//Inicia a sessão PHP, permitindo armazenar variáveis de sessão

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //Verifica se o método de solicitação é POST
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    //valores enviados pelo formulario

    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    // Armazena os dados na sessão

    header("Location: tela_cadastro.php");
    // Redireciona para a próxima tela
}
?>