<!DOCTYPE html>
<html>
<head>
	<title>Aula07 - Curso em Vídeo</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div>
		<?php
			#entrada do usuario
			$yr = $_GET["a"];
			#calculo da idede
			$age = 2019 - $yr;
			echo "Sua idede é $age anos";
			echo "</br>Sua situação é ".( ($age >= 18 && $age < 65) ? "OBRIGATÓRIO" : "FACULTATIVO");
		?>
	</div>
</body>
</html>