<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula06 - Curso em Vídeo</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div>
		<h1>Exercício aula 06</h1>
		<h2>Aplicar 10% de desconto ao preço de um produto. Usando operador de atribuição</h2>
			<?php
				#entrada do usuário
				$p = $_GET["a"];
				#print valor
				echo "O preço é: R$ ".number_format($p,2,",",".");
				#algoritimo $p = $p - 0.1*$p
				$p -= 0.1*$p;
				#print
				echo "</br>Com 10% de desconto será : R$ ".number_format($p,2,",",".");
			?>
	</div>
</body>
</html>