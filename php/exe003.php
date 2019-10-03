<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula05 - Curso em Vídeo</title>
	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div>
			<h1>Operadores Aritiméticos</h1>
				<?php
					$n1 = 4;
					$n2 = 3;
					$sum = $n1 + $n2;
					$sub = $n1 - $n2;
					$mul = $n1 * $n2;
					$div = $n1 / $n2;
					$mod = $n1 % $n2;
					$med = ($n1 + $n2)/2.0;
					echo "A soma entre $n1 e $n2, é: $sum </br>";
					echo "A soma entre $n1 e $n2, é: ".($n1 + $n2);
					echo "</br>A subtração entre $n1 e $n2, é: $sub </br>";
					echo "A multiplicação entre $n1 e $n2, é: $mul </br>";
					echo "A divisão entre $n1 e $n2, é: $div </br>";
					echo "O resota da divisão (módulo) entre $n1 e $n2, é: $mod";
					echo "</br>A média entre $n1 e $n2, é: $med";

				?>
	</div>
</body>
</html>