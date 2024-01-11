<!DOCTYPE html>
<!-- Declara o tipo de documento como HTML5 -->
<html lang="en">
<head>
<!-- Contem metadados e links para recursos externos -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <!-- Titulo da pagina-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- link de arquivos css bootstrap -->
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
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5 ">
                <h2 class="text-center">Cadastro</h2>
                <form action="processar_cadastro.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="nome" required><br>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" name="email" id="email" required><br>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" name="senha" id="senha" required><br>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="http://localhost/projeto_turma_integrante01-integrante02/Home/index.php" class="form-action btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>