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
        <p>Pergunta 2: Quais as marcas que fizeram motos esportivas se tornarem famosas?</p>
        <input type="radio" name="resposta2" value="a"> a) Kawasaki e Nissan<br>
        <input type="radio" name="resposta2" value="b"> b) BMW e Harley-Davidson<br>
        <input type="radio" name="resposta2" value="c"> c) Honda e Kawasaki<br>
        <input type="radio" name="resposta2" value="d"> d) Suzuki e Ducati<br>
        <input type="radio" name="resposta2" value="e"> e) Peugeot e Yamaha<br>

        <button type="submit" class="btn btn-light">Enviar Respostas</button>
        <a href="http://localhost/projeto_turma_integrante01-integrante02/Questionario3/quest3.php" class="btn btn-light">ir para o proximo</a>
        <a href="http://localhost/projeto_turma_integrante01-integrante02/Questionario3/quest1.php" class="btn btn-light">Voltar</a>
    </form>
</body>
</html>