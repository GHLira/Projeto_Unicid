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
        <p>Pergunta 1: Quem inventou a primeira motocicleta e automovel movido a gasolina?</p>
        <input type="radio" name="resposta1" value="a"> a) Karl Daimler em 1885<br>
        <input type="radio" name="resposta1" value="b"> b) Dino Ferrari em 1950<br>
        <input type="radio" name="resposta1" value="c"> c) Wilhelm Maybach em 1917<br>
        <input type="radio" name="resposta1" value="d"> d) Nikolaus August em 1855<br>
        <input type="radio" name="resposta1" value="e"> e) Gottlieb Daimler em 1885<br>

        <button type="submit" class="btn btn-light">Enviar Respostas</button>
        <a href="http://localhost/projeto_turma_integrante01-integrante02/Questionario3/quest2.php" class="btn btn-light">ir para o proximo</a>
        <a href="http://localhost/projeto_turma_integrante01-integrante02/Conteudos/moto.html" class="btn btn-light">Voltar</a>
    </form>
</body>
</html>