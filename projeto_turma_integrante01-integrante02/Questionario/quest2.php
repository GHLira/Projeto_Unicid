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
        $resposta2 = $_POST["resposta2"];
        $feedback = "";

        switch ($resposta2) {
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
        <p>Pergunta 2: O que ajudou muito na evolução dos carros?</p>
        <input type="radio" name="resposta2" value="a"> a) A geurra fria<br>
        <input type="radio" name="resposta2" value="b"> b) A I e II guerra mundial<br>
        <input type="radio" name="resposta2" value="c"> c) A II guerra mundial<br>
        <input type="radio" name="resposta2" value="d"> d) Cristiano Ronaldo<br>
        <input type="radio" name="resposta2" value="e"> e) A revolução automobilística<br>

        <button type="submit" class="btn btn-light">Enviar Respostas</button>
        <a href="http://localhost/projeto_turma_integrante01-integrante02/Questionario/quest3.php" class="btn btn-light">ir para o proximo</a>
        <a href="http://localhost/projeto_turma_integrante01-integrante02/Questionario/quest1.php" class="btn btn-light">Voltar</a>
    </form>
</body>
</html>