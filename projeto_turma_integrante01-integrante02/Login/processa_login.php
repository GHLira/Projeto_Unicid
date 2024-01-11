<?php
// Array com informações de usuário (substitua isso com suas informações reais)
$users = [
    'usuario' => 'senha',
];

// Array com informações de usuário (para fins de demonstração)
$users = [
    'usuario1' => 'senha1',
    'usuario2' => 'senha2',
    'usuario3' => 'senha3',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifique as credenciais do usuário
    if (array_key_exists($username, $users) && $users[$username] === $password) {
        // Redirecione para a página de sucesso após o login
        header('Location: sucesso.php');
        exit();
    } else {
        // Exiba uma mensagem de erro na página de login
        header('Location: login.php?error=Credenciais inválidas');
        exit();
    }
}
?>