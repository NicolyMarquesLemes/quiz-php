<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Quiz Geek</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>Quiz Geek</h1>
</header>

<div class="container">

<form action="resultado.php" method="POST">

<p>Digite seu nome</p>
<input type="text" name="nome" required>

<!-- PERGUNTA 1 -->
<div class="pergunta">
<p>1 - O que você mais gosta de fazer no computador?</p>

<input type="radio" name="p1" value="design" required> Criar páginas<br>
<input type="radio" name="p1" value="logica"> Resolver problemas<br>
<input type="radio" name="p1" value="games"> Jogar<br>
<input type="radio" name="p1" value="robotica"> Automatizar coisas
</div>

<!-- PERGUNTA 2 -->
<div class="pergunta">
<p>2 - Qual matéria você mais gosta?</p>

<input type="radio" name="p2" value="design" required> Artes<br>
<input type="radio" name="p2" value="logica"> Matemática<br>
<input type="radio" name="p2" value="games"> Informática<br>
<input type="radio" name="p2" value="robotica"> Física
</div>

<!-- PERGUNTA 3 -->
<div class="pergunta">
<p>3 - Qual ferramenta você gostaria de aprender?</p>

<input type="radio" name="p3" value="design" required> Photoshop<br>
<input type="radio" name="p3" value="logica"> Python<br>
<input type="radio" name="p3" value="games"> Unity<br>
<input type="radio" name="p3" value="robotica"> Arduino
</div>

<!-- PERGUNTA 4 -->
<div class="pergunta">
<p>4 - Qual dessas atividades parece mais divertida?</p>

<input type="radio" name="p4" value="design" required> Criar layouts<br>
<input type="radio" name="p4" value="logica"> Resolver desafios<br>
<input type="radio" name="p4" value="games"> Criar jogos<br>
<input type="radio" name="p4" value="robotica"> Construir robôs
</div>

<!-- PERGUNTA 5 -->
<div class="pergunta">
<p>5 - O que você prefere?</p>

<input type="radio" name="p5" value="design" required> Criatividade<br>
<input type="radio" name="p5" value="logica"> Desafios<br>
<input type="radio" name="p5" value="games"> Diversão<br>
<input type="radio" name="p5" value="robotica"> Inovação
</div>

<!-- PERGUNTA 6 -->
<div class="pergunta">
<p>6 - Qual desses você escolheria?</p>

<input type="radio" name="p6" value="design" required> Criar logo<br>
<input type="radio" name="p6" value="logica"> Resolver algoritmo<br>
<input type="radio" name="p6" value="games"> Programar jogo<br>
<input type="radio" name="p6" value="robotica"> Programar robô
</div>

<!-- PERGUNTA 7 -->
<div class="pergunta">
<p>7 - O que você faria em um projeto?</p>

<input type="radio" name="p7" value="design" required> Interface<br>
<input type="radio" name="p7" value="logica"> Sistema<br>
<input type="radio" name="p7" value="games"> Gameplay<br>
<input type="radio" name="p7" value="robotica"> Automação
</div>

<!-- PERGUNTA 8 -->
<div class="pergunta">
<p>8 - Qual linguagem te chama atenção?</p>

<input type="radio" name="p8" value="design" required> HTML/CSS<br>
<input type="radio" name="p8" value="logica"> Python<br>
<input type="radio" name="p8" value="games"> C#<br>
<input type="radio" name="p8" value="robotica"> C++
</div>

<!-- PERGUNTA 9 -->
<div class="pergunta">
<p>9 - Qual projeto parece mais interessante?</p>

<input type="radio" name="p9" value="design" required> Criar site<br>
<input type="radio" name="p9" value="logica"> Criar algoritmo<br>
<input type="radio" name="p9" value="games"> Criar jogo<br>
<input type="radio" name="p9" value="robotica"> Criar robô
</div>

<!-- PERGUNTA 10 -->
<div class="pergunta">
<p>10 - Como você se define?</p>

<input type="radio" name="p10" value="design" required> Criativo<br>
<input type="radio" name="p10" value="logica"> Analítico<br>
<input type="radio" name="p10" value="games"> Gamer<br>
<input type="radio" name="p10" value="robotica"> Inventor
</div>

<br><br>

<button class="botao" type="submit">Descobrir meu perfil</button>

</form>

</div>

</body>
</html>