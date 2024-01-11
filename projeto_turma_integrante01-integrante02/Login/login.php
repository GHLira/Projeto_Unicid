<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
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
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <h2 class="text-center">Login</h2>
                <form action="processa_login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Nome de usuário:</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <a href="http://localhost/projeto_turma_integrante01-integrante02/Home/index.php" class="form-action btn btn-primary">Voltar</a>
                </form>
                <?php
                    if (isset($_GET['error'])) {
                        echo '<div class="alert alert-danger mt-3">'.$_GET['error'].'</div>';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>