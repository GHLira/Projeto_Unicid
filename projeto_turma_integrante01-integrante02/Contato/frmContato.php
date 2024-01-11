<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Contato</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body.light-bg {
        background-color: #f5f5f5;
    }
        
    body.dark-bg {
        background-color: #333;
        color: #fff;
    }
</style>
<body class="light-bg font-family: 'Arial', sans-serif;">
    <!-- O corpo da página começa com a classe 'light-bg' aplicada -->
    <div class="container mt-2">
        <button id="toggle-bg-button" class="form-action btn btn-dark">Alterar</button>
         <!-- Um botão para alternar entre os modos claro e escuro -->
        <script>
            const body = document.body;
            //Manipulação do body
            const button = document.getElementById('toggle-bg-button');
            //Cria um id para ser chamado para que a alteração seja ativada pelo button
            let isDarkMode = false;
            //Declara uma variavel e a inicializa como falsa (é o que define se o tema vai ser claro ou escuro
            
            button.addEventListener('click', function() {
            //Será executado quando o botão for clicado.    
                isDarkMode = !isDarkMode;
                //Inverte o valor de false para true e vice-versa. 
                if (isDarkMode) {
                //verifica o valor
                    body.classList.remove('light-bg');
                    //remove
                    body.classList.add('dark-bg');
                    //adiciona
                } else {
                    body.classList.remove('dark-bg');
                    //remove
                    body.classList.add('light-bg');
                    //adiciona
                }
            });
        </script>
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <h2 class="text-center">Tela de Contato</h2>
                <form action="info_contato.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Assunto:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="Assunto">E-mail:</label>
                        <input type="text" class="form-control" id="assunto" name="assunto" required>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem:</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="http://localhost/projeto_turma_integrante01-integrante02/Home/index.php" class="form-action btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>