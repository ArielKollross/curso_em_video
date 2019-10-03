<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula06 - Curso em Vídeo</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div>
		<h2>Mostre qual foi o ano anterior ao atual</h2>
			<?php
				#entrada do usuário
				$a = $_GET["a"];
				#print usuario
				echo "O ano digitado foi: $a";
				#print
				echo "</br>O ano anterior foi : ".--$a; // retira um ano dai mostra a variavel
				#no caso de $a--, mostra a var depois retira 1
				$a++;
				echo "</br> O ano que vem será: ".++$a;

				/*
					este é um comentário, assim como em C
				*/

			?>
	</div>
</body>
</html>