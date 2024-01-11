<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    // Aqui você pode fazer o processamento dos dados ou redirecionar para outra página
    // Vamos apenas exibir os dados como exemplo
}
?>
<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<html>
<head>
    <title>Resultado do Formulário</title>
</head>
<body class="font-family: 'Arial', sans-serif;">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-5 mt-5">
            <h2 class="text-center">Tela de Contato</h2>
            <div class="form-group">
                <p class="form-control">Nome: <?php echo $nome; ?></p>
            </div>
            <div class="form-group">
                <p class="form-control">E-mail: <?php echo $email; ?></p>
            </div>
            <div class="form-group">
                <p class="form-control">Assunto: <?php echo $assunto; ?></p>
            </div>   
            <div class="form-group">
                <div class="mb-3">
                <label for="mensage" class="form-label">Mensagem</label>
                <textarea class="form-control" name="mensage," id="mensagem" rows="5"><?php echo $mensagem; ?></textarea>
            </div> 
            <a href="http://localhost/projeto_turma_integrante01-integrante02/Home/index.php" class="form-action btn btn-primary">Voltar</a>
            </div>
    </div>
</body>
</html>