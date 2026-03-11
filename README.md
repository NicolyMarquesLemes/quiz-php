📌 Descrição do Projeto

Este projeto é um site interativo de quiz que descobre qual é o perfil tecnológico do usuário.
O jogador responde 10 perguntas e ao final recebe um resultado personalizado com descrição e imagem do perfil.

O sistema também utiliza cookies para lembrar o nome do jogador e possui um contador que mostra quantas vezes o quiz já foi jogado.

🎯 Objetivo

Aplicar conceitos básicos de desenvolvimento web com PHP, incluindo:

HTML

CSS

Formulários

Método POST

PHP

Variáveis

Condicionais (if)

Arrays

Cookies

Manipulação de arquivos

Organização de arquivos

📂 Estrutura do Projeto
quiz-php
│
├── index.php
├── quiz.php
├── resultado.php
├── style.css
├── contador.txt
└── img
    ├── primeira.jpg
    ├── segunda.webp
    ├── terceira.webp
    └── quarta.jpg
🏠 Página Inicial – index.php

A página inicial apresenta:

Título do quiz

Breve descrição

Botão para iniciar o quiz

Mensagem de boas-vindas caso o jogador já tenha jogado antes (usando cookies)

📋 Página do Quiz – quiz.php

Nesta página está o formulário com 10 perguntas.

O usuário precisa:

Digitar seu nome

Responder todas as perguntas

O formulário envia os dados para o arquivo resultado.php usando o método POST.

⚙️ Página de Resultado – resultado.php

Essa página é responsável por:

Receber os dados do formulário

Contar os pontos de cada perfil

Definir o perfil do jogador

Exibir a descrição do perfil

Mostrar uma imagem correspondente

Salvar o nome do jogador em cookie

Atualizar o contador de jogadas

🏆 Perfis Possíveis
🎨 Mestre do Design

Perfil criativo que gosta de criar interfaces, layouts e experiências visuais.

🧠 Hacker da Lógica

Perfil analítico que gosta de resolver problemas e criar algoritmos.

🎮 Criador de Games

Perfil imaginativo que gosta de desenvolver jogos e pensar em gameplay.

🤖 Explorador da Tecnologia

Perfil curioso que gosta de robótica, automação e inovação tecnológica.

🎨 Estilização

O site utiliza CSS para criar:

Layout centralizado

Botões estilizados

Animação de entrada

Cores baseadas em tons de azul

Exibição de imagens do perfil

🔢 Contador de Jogadas

O arquivo contador.txt armazena quantas vezes o quiz foi jogado.
Cada vez que um jogador termina o quiz, o valor é incrementado.

🍪 Cookies

O sistema salva o nome do jogador usando:

setcookie("jogador",$nome,time()+3600);

Assim, quando o jogador voltar ao site, aparecerá a mensagem:

Bem-vindo de volta, [nome]!

📸 Imagens

Primeira Tela: <img width="1920" height="1080" alt="1" src="https://github.com/user-attachments/assets/67acb87d-0e8a-4018-b4f8-f389961db680" />
Segunda Tela: <img width="1920" height="1080" alt="2" src="https://github.com/user-attachments/assets/ffb8a29c-ac3c-4079-b53f-a3e75627f9ac" />
Terceira Tela: <img width="1920" height="1080" alt="3" src="https://github.com/user-attachments/assets/b87c57ba-f09f-403b-adb1-93556d004396" />

🚀 Como Executar o Projeto

Instale o XAMPP

Coloque a pasta do projeto dentro de:

htdocs

Inicie o Apache no XAMPP

Abra o navegador e acesse:

http://localhost/quiz-php
👨‍💻 Autor

Projeto desenvolvido para fins educacionais como prática de HTML, CSS e PHP.
