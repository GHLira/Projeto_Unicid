<?php
session_start();

$nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : "";
$email = isset($_SESSION['email']) ? $_SESSION['email'] : "";
$senha = isset($_SESSION['senha']) ? $_SESSION['senha'] : "";

// Limpa os dados da sessão
unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['senha']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados de Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
</style>
<body class="font-family: 'Arial', sans-serif;">
    <div class="container mt-2">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5 ">
                <h2 class="text-center">Dados de Cadastro</h2>
                <form action="processar_cadastro.php" method="POST">
                    <div class="form-group">
                        <p class="form-control">Nome: <?php echo $nome; ?></p>
                    </div>
                    <div class="form-group">
                        <p class="form-control">E-mail: <?php echo $email; ?></p>
                    </div>
                    <div class="form-group">
                        <p class="form-control">Senha: <?php echo $senha; ?></p>
                    </div>
                    <!-- exibe os dados de cadastro armazenados na sessão, nome, e-mail e senha -->
                    <a href="http://localhost/projeto_turma_integrante01-integrante02/Home/index.php" class="form-action btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>