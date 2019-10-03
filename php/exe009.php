<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula07 - Curso em Vídeo</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div>
		<p>Permitir que o usuário escolha entre somar e multiplicar dois números.</br>
			Use url: ...php?o=operação&x=numb1&y=numb2 </br>
		Para fazer a soma entre os dois numeros, escolha o = 1, para qualquer outro numero, sera feita a multiplicação.</br>

		</p>
			<?php
				#entrada do usuário
				$op = $_GET["o"];
				$x = $_GET["x"];
				$y = $_GET["y"];
				#calculadora
				echo "O valor de x = $x e y = $y";
				$var = $op;
				$print = $var == 1 ? "soma" : "multiplicação";
				echo "a operaçao escolhida foi: $print";
				$ope = $op == 1 ? $x+$y : $x*$y ;
				echo "</br>O resultado é: $ope";
			?>
	</div>
</body>
</html>