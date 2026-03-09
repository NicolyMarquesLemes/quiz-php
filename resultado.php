<?php

$nome = $_POST['nome'];

$design = 0;
$logica = 0;
$games = 0;
$robotica = 0;

$respostas = [
$_POST['p1'],
$_POST['p2'],
$_POST['p3'],
$_POST['p4'],
$_POST['p5'],
$_POST['p6'],
$_POST['p7'],
$_POST['p8'],
$_POST['p9'],
$_POST['p10']
];

foreach($respostas as $r){

if($r == "design"){ $design++; }
if($r == "logica"){ $logica++; }
if($r == "games"){ $games++; }
if($r == "robotica"){ $robotica++; }

}

if($design > $logica && $design > $games && $design > $robotica){

$perfil = "Mestre do Design!";
$descricao = "Você tem uma mente criativa e gosta de transformar ideias em algo visual.
Provavelmente se daria muito bem criando interfaces, sites ou aplicativos.
Sua habilidade está em pensar na experiência do usuário e deixar tudo bonito e organizado.
O mundo do Front-End e do design combina muito com você.";

$img = "img/segunda.webp";

}

elseif($logica > $design && $logica > $games && $logica > $robotica){

$perfil = "Hacker da Lógica!";
$descricao = "Você gosta de desafios e de resolver problemas complexos.
Provavelmente tem facilidade com matemática, algoritmos e programação.
Seu perfil combina com áreas que exigem pensamento lógico e análise de sistemas.
Carreiras como programação e desenvolvimento de software podem ser ideais para você.";

$img = "img/terceira.webp";

}

elseif($games > $design && $games > $logica && $games > $robotica){

$perfil = "Criador de Games!";
$descricao = "Você tem uma imaginação forte e gosta de transformar ideias em diversão.
O mundo dos jogos mistura criatividade, programação e tecnologia.
Esse perfil combina com quem gosta de pensar em histórias e desafios.
Trabalhar com desenvolvimento de jogos pode ser perfeito para você.";

$img = "img/quarta.jpg";

}

else{

$perfil = "Explorador da Tecnologia!";
$descricao = "Você gosta de descobrir como as coisas funcionam e criar soluções novas.
Tecnologias como robótica, automação e inteligência artificial chamam sua atenção.
Esse perfil combina com quem gosta de experimentar e construir coisas.
Áreas como robótica e engenharia tecnológica podem ser o seu caminho.";

$img = "img/primeira.jpg";

}

setcookie("jogador",$nome,time()+3600);

$arquivo = "contador.txt";
$contador = file_get_contents($arquivo);
$contador++;
file_put_contents($arquivo,$contador);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>Resultado do Quiz</h1>
</header>

<div class="container">

<p>Jogador: <?php echo $nome; ?></p>

<h2><?php echo $perfil; ?></h2>

<img src="<?php echo $img; ?>" class="perfil-img">

<p><?php echo $descricao; ?></p>

<p id="vezes">Este quiz já foi jogado <?php echo $contador; ?> vezes!</p>

<a href="index.php" class="botao">Jogar novamente</a>

</div>

</body>
</html>