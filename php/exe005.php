<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula05 - Curso em Vídeo</title>
		<meta charset="utf-8">
			<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
		<style>
			body{
				background-color: grey;
			}
			div{
				color: white;
				background-color: black;
				font-size: 15pt;
				width: 1000px;
				height: 500px;
				padding: 50px;
				margin: 25px;
			}
		</style>
</head>
<body>
	<div>
		<p>Entre com os valores das variávies a e b </br>
			Utilize na url: ?a=valor&b=valor
		</p>
			<?php
				#Entrada do usuário
				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				#print das variaveis
				echo "As variaveis são a=$n1 e b=$n2";
				#operações matematicas

				#modulo do valor
				echo "</br>O valor do modulo é: ".abs($n1);
				#raiz quadrada
				echo "</br>O valor da raiz quadrada é: ".sqrt($n1);
				#potenciacao
				echo"</br>A potenciação de $n1<sup>$n2</sup>, vale: ".pow($n1,$n2);
				#arrendondamento
				echo"</br>Arredondando $n1, temos: ".round($n1);
				# somente valor inteiro			
				echo"</br>O valor inteiro de $n1, é: ".intval($n1);

			?>
	</div>
</body>
</html>