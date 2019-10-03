<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula05 - Curso em Vídeo</title>
		<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div>
		<h1>Operadores aritiméticos</h1>
			<p>Usuário deve atribuir os valores de a e b, diretamente na url, segue o exemplo abaixo:</br>
				http://localhost/curso_em_video/exe004.php?a=5&b=7</br>
			Portanto, adicione no final da url: ?a=x&b=y </br>
			subistituindo "x" e "y" pelos valores desejados.		
			</p>

			<?php
				#Entrada do usuário
				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				#Operacoes aritimetica
				$sum = $n1 + $n2;
				$sub = $n1 - $n2;
				$mul = $n1 * $n2;
				$div = $n1 / $n2;
				$mod = $n1 % $n2;
				$med = ($n1 + $n2)/2.0;
				#print
				echo "</br>A soma entre $n1 e $n2, é: ".($n1 + $n2);
				echo "</br>A subtração entre $n1 e $n2, é: $sub";
				echo "</br>A multiplicação entre $n1 e $n2, é: $mul";
				echo "</br>A divisão entre $n1 e $n2, é: $div";
				echo "</br>O resota da divisão (módulo) entre $n1 e $n2, é: $mod";
				echo "</br>A média entre $n1 e $n2, é: $med";
			?>
	</div>
</body>
</html>