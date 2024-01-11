<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Inclua a biblioteca CSS do Bootstrap 5 -->
    <link rel="stylesheet" href="style.css">
    <title>Sistema de Informações de Integrantes</title>
</head>
<style>

</style>
<body class="bg-dark text-white light-bg font-family: 'Arial', sans-serif;">
    <h1 class="text-center">Informações de Integrantes <br> E <br> Documentação</h1>

    <?php
    // Array de integrantes com informações
    $integrantes = [
        [
            "imagem" => "Lira.png",
            "nome" => "Gustavo Henrique Lira",
            "RGM" => 35738413,
            "funcao" => "Planejamento, incrementação, ferificação e correção de estrutura "
        ],
        [
            "imagem" => "Carol.png",
            "nome" => "Carolina Nascimento Yokomizo",
            "RGM" => 35381892,
            "funcao" => "Design e documentação das paginas"
        ],
        [
            "imagem" => "Felipe.png",
            "nome" => "Felipe Andrew",
            "RGM" => 35592451,
            "funcao" => "Estrutura php e formulario de login"
        ],
        [
            "imagem" => "Ryan.png",
            "nome" => "Ryan Lopes de Sousa",
            "RGM" => 35835753,
            "funcao" => "Estrutura php e formulario de contato"
        ]
    ];
    ?>

    <div class="row">
        <!-- Exibi informações de integrantes usando foreach -->
            <?php foreach ($integrantes as $integrante) : ?>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <img src="<?php echo $integrante["imagem"]; ?>" class="card-img-top imagem-prefil" alt="Foto de perfil">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $integrante["nome"]; ?></h5>
                            <p class="card-text">RGM: <?php echo $integrante["RGM"]; ?></p>
                            <p class="card-text">Função: <?php echo $integrante["funcao"]; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="container border border-danger">
        <h1>Pagina Cadastro</h1>
        <p>Um formulário de cadastro está contido dentro de uma div com a classe container.<br>
            O formulário envia dados para a página "processar_cadastro.php" usando o método POST.<br>
            Três campos são fornecidos para o usuário preencher: nome, e-mail e senha.<br>
            Um botão "Cadastrar" permite ao usuário enviar o formulário.<br>
            Um link "Voltar" redireciona o usuário para a página inicial.</p>
    </div>

    <div class="container border border-danger">
        <h1>Pagina processar_cadastro.php</h1>
        <p>session_start(): Esta função inicia uma sessão PHP,  armazenando variáveis de sessão.<br>
            if ($_SERVER["REQUEST_METHOD"] === "POST"): Este bloco condicional verifica se o método de solicitação HTTP é POST.<br>
            $_POST["nome"], $_POST["email"], $_POST["senha"]: Essas linhas obtêm os valores enviados pelo formulário com os nomes <br>
            "nome", "email" e "senha" usando a superglobal $_POST. Os valores do formulário são armazenados nessas variáveis.<br>
            $_SESSION['nome'], $_SESSION['email'], $_SESSION['senha']: Aqui, os dados do formulário (nome, email e senha) são <br>
            armazenados em variáveis de sessão. Isso permite que esses valores sejam acessíveis em outras partes do aplicativo <br>
            enquanto a sessão estiver ativa.<br>
            header("Location: tela_cadastro.php"): Esta linha redireciona o usuário para a página "tela_cadastro.php" após o envio do <br>
            formulário. O redirecionamento é feito usando o cabeçalho HTTP, levando o usuário para a próxima tela do processo.<p>

        <p>Este código é um exemplo de manipulação de dados de formulário em PHP e uso de variáveis <br>
            de sessão para preservar dados entre solicitações do usuário.</p>
    </div>

    <div class="container border border-danger">
        <h1>Pagina tela_cadastro.php</h1>
        <p>Destino final do cadastro onde a seção PHP verifica se as variáveis de sessão 'nome', 'email' e 'senha' existem. <br>
            Se existirem, esses valores são atribuídos às variáveis correspondentes; caso contrário, são atribuídas strings vazias.</p>

        <p>unset($_SESSION['nome']), unset($_SESSION['email']), unset($_SESSION['senha']): Essas linhas removem as variáveis 'nome', <br>
            'email' e 'senha' da sessão, efetivamente limpando os dados armazenados na sessão.</p>

        <p>O código HTML exibe os dados de cadastro armazenados nas variáveis $nome, $email e $senha, dentro de parágrafos 
            (p) dentro de caixas de formulário (form controls).<br>
            O link "Voltar" aponta para "http://localhost/projeto_turma_integrante01-integrante02/Home/index.php" e <br>
            permite que o usuário retorne à página inicial.</p>
    </div>

    <div class="container border border-danger">
        <h1>Pagina enviar_contato.php</h1>
        <p>A página exibe cinco linhas em branco (br) no início, criando um espaço em branco na parte superior.<br>
            A maioria do conteúdo está contido em uma div com a classe container, que centraliza o conteúdo na página.<br>
            A página consiste em três elementos principais:<br>
            Uma mensagem de "Envio bem-sucedido!" é exibida no centro da página dentro de uma coluna Bootstrap.<br>
            Um parágrafo que informa que a equipe de atendimento responderá em breve.<br>
            Dois botões de "Voltar" que redirecionam o usuário para a página inicial do projeto.</p>
    </div>

    <div class="container border border-danger">
        <h1>Pagina frmContato.php</h1>
        <p>Um formulário de contato está contido dentro de uma div com a classe container, centralizando o conteúdo na página.<br>
            O formulário envia dados para a página "info_contato.php" usando o método POST.<br>
            Os campos incluem nome, assunto, e-mail e mensagem.<br>
            Botões "Enviar" e "Voltar" permitem ao usuário enviar o formulário ou retornar à página inicial.</p>
        <p>Script JavaScript<br>
            O script JavaScript permite alternar entre os modos claro e escuro. Quando o botão "Alterar" é clicado, a classe de plano de fundo<br>
             do corpo da página é alternada entre light-bg e dark-bg para controlar o plano de fundo.</p>
    </div>

    <div class="container border border-danger">
        <h1>Pagina info_contato.php</h1>
        <p>Esta é uma página HTML que exibe os dados enviados por meio de um formulário de contato. Ela apresenta os dados de nome, e-mail,<br>
            assunto e mensagem, além de um botão "Voltar" que permite ao usuário retornar à página inicial do projeto.</p>

        <p>O código PHP no início é responsável pelo processamento dos dados do formulário. Ele verifica se a solicitação foi feita usando o método<br>
             POST e, em seguida, obtém os dados do formulário (nome, e-mail, assunto e mensagem).</p>
            
        <p>A página exibe o conteúdo dentro de uma div com a classe container, centralizando o conteúdo na página.<br>
            Ela consiste em:<br>
            Um cabeçalho com o título "Tela de Contato."<br>
            Campos de exibição para nome, e-mail, assunto e mensagem. Os valores são exibidos usando tags (p) e (textarea).<br>
            Um botão "Voltar" que redireciona o usuário para a página inicial do projeto.</p>
    </div>

    <div class="container border border-danger">
        <h1>Página carro.html</h1>
        <p>Esta é uma página HTML que apresenta informações sobre a história e a evolução dos carros. A página inclui um botão que <br>
            permite alternar entre os modos claro e escuro, bem como uma opção para realizar um pequeno questionário. Ela também possui <br>
            um rodapé informativo no final.</p>

        <p>O corpo da página começa com a classe light-bg aplicada, que define o fundo inicial como claro.<br>
            Há um botão "Alterar" que permite alternar entre os modos claro e escuro. <br>
            O botão possui um ID chamado toggle-bg-button, que é usado para controlar a mudança do tema com JavaScript.<br>
            Um script JavaScript está incorporado na página, que permite alternar entre os temas claro e escuro quando o botão é clicado.<br> 
            Ele também controla a adição e remoção de classes de estilo para ajustar o tema.<br>
            Um botão "Realizar um pequeno questionário" leva a outra página onde um questionário pode ser respondido.<br>
            O conteúdo principal é organizado em uma série de seções para diferentes períodos da história e evolução dos carros. <br>
            Cada seção possui um título e um parágrafo de texto explicativo.<br>
            A página termina com um rodapé que fornece o ano atual e informações sobre a história e evolução dos carros.</p>
    </div>

    <div class="container border border-danger">
        <h1>Pagina celular.html</h1>
        <p>Esta é uma página HTML que apresenta informações sobre a história e a evolução dos celulares. A página inclui um botão que permite alternar entre <br>
            os modos claro e escuro, bem como uma opção para realizar um pequeno questionário. Ela também possui um rodapé informativo no final.</p>
        
        <p>O corpo da página começa com a classe light-bg aplicada, que define o fundo inicial como claro.<br>
            Há um botão "Alterar" que permite alternar entre os modos claro e escuro. <br>
            O botão possui um ID chamado toggle-bg-button, que é usado para controlar a mudança do tema com JavaScript.<br>
            Um script JavaScript está incorporado na página, que permite alternar entre os temas claro e escuro quando o botão é clicado.<br> 
            Ele também controla a adição e remoção de classes de estilo para ajustar o tema.<br>
            Um botão "Realizar um pequeno questionário" leva a outra página onde um questionário pode ser respondido.<br>
            O conteúdo principal é organizado em uma série de seções para diferentes períodos da história e evolução do celular. <br>
            Cada seção possui um título e um parágrafo de texto explicativo.<br>
            A página termina com um rodapé que fornece o ano atual e informações sobre a história e evolução do celular.</p>
    </div>
    <div class="container border border-danger">
        <h1>Paginha computador.html</h1>
        <p>Esta é uma página HTML que apresenta informações sobre a história e a evolução dos computadores. A página inclui um botão que permite alternar entre os modos <br>
            claro e escuro, bem como uma opção para realizar um pequeno questionário. Ela também possui um rodapé informativo no final.</p>

        <p>O corpo da página começa com a classe light-bg aplicada, que define o fundo inicial como claro.<br>
            Há um botão "Alterar" que permite alternar entre os modos claro e escuro. <br>
            O botão possui um ID chamado toggle-bg-button, que é usado para controlar a mudança do tema com JavaScript.<br>
            Um script JavaScript está incorporado na página, que permite alternar entre os temas claro e escuro quando o botão é clicado.<br> 
            Ele também controla a adição e remoção de classes de estilo para ajustar o tema.<br>
            Um botão "Realizar um pequeno questionário" leva a outra página onde um questionário pode ser respondido.<br>
            O conteúdo principal é organizado em uma série de seções para diferentes períodos da história e evolução dos computadores. <br>
            Cada seção possui um título e um parágrafo de texto explicativo.<br>
            A página termina com um rodapé que fornece o ano atual e informações sobre a história e evolução dos computadores.</p>
    </div>

    <div class="container border border-danger">
        <h1>Pagina </h1>
        <p>Esta é uma página HTML que apresenta informações sobre a história e a evolução das motocicletas. <br>
            A página inclui um botão que permite alternar entre os modos claro e escuro, bem como uma opção para realizar um pequeno questionário. <br>
            Ela também possui um rodapé informativo no final.</p>

        <p>O corpo da página começa com a classe light-bg aplicada, que define o fundo inicial como claro.<br>
            Há um botão "Alterar" que permite alternar entre os modos claro e escuro. O botão possui um ID chamado toggle-bg-button, que é usado para <br>
            controlar a mudança do tema com JavaScript.<br>
            Um script JavaScript está incorporado na página, que permite alternar entre os temas claro e escuro quando o botão é clicado. <br>
            Ele também controla a adição e remoção de classes de estilo para ajustar o tema.<br>
            Um link "Voltar" que leva a outra página em seu projeto.<br>
            Um título principal é exibido na página.<br>
            O conteúdo principal é organizado em uma série de seções para diferentes períodos da história e da evolução das motocicletas. <br>
            Cada seção possui um título e um parágrafo de texto explicativo.<br>
            A página termina com um rodapé que fornece o ano atual e informações sobre a história e a evolução das motocicletas.</p>
    </div>

    <div class="container border border-danger">
        <h1>Pagina index.php</h1>

        <p>Cabeçalho da Página<br>
            O cabeçalho da página contém uma barra de navegação superior com um logotipo à esquerda (imagem com "historiaLogo.png") e botões de "Login" e 
            "Cadastrar" à direita.<br>
            Os botões "Login" e "Cadastrar" direcionam o usuário para as páginas de login e cadastro correspondentes em seu projeto.<br>
            <br>
            Seção de Menu<br>
            Há uma seção de menu que é uma linha vermelha que divide o conteúdo superior da página.<br>
            <br>
            Vídeo Promocional<br>
            Há um vídeo incorporado (iframe) do YouTube que é exibido no centro da página. O vídeo é responsivo e reproduz um vídeo promocional.<br>
            As configurações do vídeo permitem o controle de aceleração, reprodução automática e outras funcionalidades.<br>
            <br>
            Seções de Conteúdo<br>
            Existem quatro seções de conteúdo no site, cada uma dedicada a um tópico específico: carros, celulares, motocicletas e computadores.<br>
            Cada seção contém:<br>
            Uma imagem relacionada ao tópico.<br>
            Um bloco de texto com um resumo sobre a história e evolução desse tópico.<br>
            Um botão "Ler sobre" que direciona o usuário para páginas de conteúdo específicas relacionadas a cada tópico em seu projeto.<br>
            
            Rodapé<br>
            O rodapé é uma seção inferior da página com um botão de logotipo à esquerda (imagem com "historiaLogo.png") e um botão "Entre em contato 
            conosco" à direita.<br>
            O botão "Entre em contato conosco" direciona o usuário para uma página de contato em seu projeto.</p>
    </div>

    <div class="container border border-danger">
        <h1>Pagina login.php</h1>
        <p>Um estilo personalizado é definido na seção (style) para alternar entre modos claro e escuro. 
            A classe light-bg define o plano de fundo claro, enquanto a classe dark-bg define o plano de fundo escuro. 
            Isso permite a alternância do tema na página.</p>
        
        <p>A página começa com a classe light-bg aplicada, que define o tema claro.<br>
            Há um botão "Alterar" que permite alternar entre os temas claro e escuro.<br>
            Um script JavaScript é incorporado na página para alternar entre os temas. <br>
            Ele verifica se o botão é clicado e alterna a classe do corpo entre light-bg e dark-bg para alternar o tema.</p>

        <p>O formulário de login está contido dentro de uma div com a classe container.<br>
            O formulário inclui campos para inserir nome de usuário e senha, bem como botões para enviar o formulário e <br>
            voltar para a página inicial.<br>
            Quando o usuário preenche o formulário e clica em "Entrar," os dados do formulário são enviados para "processa_login.php" <br>
            para processamento (a ação do formulário).<br>
            Se houver algum erro durante o processo de login, uma mensagem de erro será exibida na página após o formulário.</p>
    </div>

    <div class="container border border-danger">
        <h1>Pagina processa_login.php</h1>
        <p>Este código PHP é responsável pela autenticação de usuário. <br>
            Ele verifica se o nome de usuário e a senha fornecidos correspondem a um dos pares válidos no array. <br>
            Se as credenciais forem válidas, o usuário é redirecionado para uma página de sucesso; caso contrário, <br>
            uma mensagem de erro é exibida e o usuário permanece na página de login. <br>
            O código verifica se a solicitação HTTP é uma solicitação POST usando $_SERVER['REQUEST_METHOD'].<br>
            Se as credenciais forem válidas, o código redireciona o usuário para a página de sucesso, chamada "sucesso.php", <br>
            usando header('Location: sucesso.php'). <br>
            Se as credenciais forem inválidas, o código redireciona o usuário de volta à página de login, adicionando uma mensagem de <br>
            erro na URL (por meio do parâmetro error) para informar ao usuário que as credenciais são inválidas.</p>
    </div>

    <div class="container border border-danger">
        <h1>Pagina sucesso.php</h1>
        <p>Este código apenas mostra uma mensagem confirmando o acesso com base<br>
            no resultado e disponibilizando um botão para acessar a pagina inicial.</p>
    </div>

    <div class="container border border-danger">
        <h1>Paginas de quest.php(obs: todos seguem a mesma documentação)</h1>
        <p>Este código representa uma página de teste de conhecimento simples com uma pergunta e feedback com base na resposta selecionada.<br>
            O código PHP lida com a lógica do teste e fornece feedback ao usuário. </p>

        <p>Este código possui um trecho PHP incorporado que processa o formulário e exibe feedback com base na resposta fornecida. <br>
            O comado if ($_SERVER["REQUEST_METHOD"] == "POST") { ... }: Verifica se o formulário foi submetido por meio do método POST. <br>
            $resposta1 = $_POST["resposta1"];: Captura a resposta submetida na pergunta 1. switch ($resposta1) { ... }: Usa uma estrutura switch <br>
            para verificar a resposta submetida e definir o feedback correspondente.<br>
            Cada caso (por exemplo, "a", "b", "c", "d", "e") verifica a resposta escolhida e atribui um feedback com base na correspondência.<br>
            echo "<p>$feedback</p>";: Exibe o feedback para o usuário com base na resposta escolhida.<br>
            Inclui um botão para ir para a próxima pergunta no questionário e um para voltar há pagina anterior.</p>
    </div>
    <div class="container border border-danger">
        <h1>Ideias e auxílios externos usados no projeto</h1>
        <p>Neste projeto pensamos em diversas formas de incluir as estruturas php, foram utilizadas (if ; foreach; switch)<br>
            com o auxilio de sites como o do prorpio php e o w3school.<br>
            Para o desing decidimos utilizar diversas ferramentas bootstrap e um pouco de css para alterar pequenas partes<br>
            como coloração, fonte e posicionamento, optamos por usar a fonte Arial nas nossas telas em geral e para conectalas<br>
            utilizamos links e conexão via php.
        </p>
        <div class="row mt-5">
            <div class="col-sm-12 text-center">
                <a href="http://localhost/projeto_turma_integrante01-integrante02/Home/index.php" class="form-action btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
</body>
</html>