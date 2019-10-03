<!DOCTYPE html>
<html>
<head>
	<title>Aula06 - Curso em Video </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div>
		<h1>Situação da média do aluno</h1>
			<p>Entre com o valor das provas do aluno para p1,p2 e p3</p>
			<?php
				#notas
				$p1 = $_GET["p1"];
				$p2 = $_GET["p2"];
				$p3 = $_GET["p3"];
				#media
				$med = ($p1 + $p2 + $p3)/3.0 ;
				echo "A média do aluno é $med, ele esta ".($med > 7 ? "Aprovado" : "Final");
			?>
	</div>
</body>
</html>