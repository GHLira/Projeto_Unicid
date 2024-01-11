<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Teste Seu conhecimento</title>
</head>
<body class="font-family: 'Arial', sans-serif;">
    <h1 class="text-center">Teste seu conhecimento</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $resposta1 = $_POST["resposta1"];
        $feedback = "";

        switch ($resposta1) {
            case "a":
                $feedback = "Resposta Errada";
                break;
            case "b":
                $feedback = "Resposta Errada";
                break;
            case "c":
                $feedback = "Resposta Certa";
                break;
            case "d":
                $feedback = "Resposta Errada";
                break;
            case "e":
                $feedback = "Resposta Errada";
                break;
            default:
                $feedback = "Escolha uma resposta válida.";
        }

        echo "<p>$feedback</p>";
    }
    ?>

    <form method="post" class="form-control">
        <p>Pergunta 1: Quem foi que inventou o primeiro carro?</p>
        <input type="radio" name="resposta1" value="a"> a) Albert Heistein<br>
        <input type="radio" name="resposta1" value="b"> b) Bellighan<br>
        <input type="radio" name="resposta1" value="c"> c) Nicolas Joseph<br>
        <input type="radio" name="resposta1" value="d"> d) Nicolas Paschoal<br>
        <input type="radio" name="resposta1" value="e"> e) Nicolas Tesla<br>

        <button type="submit" class="btn btn-light">Enviar Respostas</button>
        <a href="http://localhost/projeto_turma_integrante01-integrante02/Questionario/quest2.php" class="btn btn-light">ir para o proximo</a>
        <a href="http://localhost/projeto_turma_integrante01-integrante02/Conteudos/carro.html" class="btn btn-light">Voltar</a>
    </form>
</body>
</html>