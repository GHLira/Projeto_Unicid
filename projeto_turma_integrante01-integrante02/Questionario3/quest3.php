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
        $resposta3 = $_POST["resposta3"];
        $feedback = "";

        switch ($resposta3) {
            case "a":
                $feedback = "Resposta Certa";
                break;
            case "b":
                $feedback = "Resposta Errada";
                break;
            case "c":
                $feedback = "Resposta Errada";
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
        <p>Pergunta 3: Qual a motocicleta usada pelos militares nas guerras?</p>
        <input type="radio" name="resposta3" value="a"> a) BMW<br>
        <input type="radio" name="resposta3" value="b"> b) Honda<br>
        <input type="radio" name="resposta3" value="c"> c) Suzuki<br>
        <input type="radio" name="resposta3" value="d"> d) Harley-Davidson<br>
        <input type="radio" name="resposta3" value="e"> e) Porshe<br>

        <button type="submit" class="btn btn-light">Enviar Respostas</button>
        <a href="http://localhost/projeto_turma_integrante01-integrante02/Questionario3/quest2.php" class="btn btn-light">Voltar</a>
    </form>
</body>
</html>