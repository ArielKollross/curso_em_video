<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula07 - Curso em Video</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div>
		<?php
			$var1 = 3;
			$var2 = "3";
			$r = $var1 === $var2 ? "SIM" : "NÃO" ;
			$r2 = $var1 == $var2 ? "SIM" : "NÃO" ;
			echo "As variaveis $var1 e $var2 são do mesmo tipo primitivo? $r";
			echo "</br>As variaveis $var1 e $var2 são iguais tipo? $r2";
		?>
	</div>
</body>
</html>