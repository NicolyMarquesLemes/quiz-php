<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Qual Dev Você Seria?</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>Qual Dev Você Seria?</h1>
</header>

<div class="container">

<?php
if(isset($_COOKIE['jogador'])){
echo "<h3 id=bemvindo >Bem-vindo de volta, ".$_COOKIE['jogador']."!<h3>";
}
?>

<p>
Responda algumas perguntas <br>
e <br>
descubra seu perfil na tecnologia.
</p>

<a href="quiz.php" class="botao">Começar Quiz</a>

</div>

</body>
</html>