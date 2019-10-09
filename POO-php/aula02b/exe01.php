<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 02 POO</title>
</head>
<body>
	<?php
		require_once 'Caneta.php';

		$c1 = new Caneta;
		$c1->modelo = "Bic";
		$c1->cor = "Azul";
		$c1->ponta = 0.5;
		$c1->carga = 78;
		$c1->tampada = true;

		$c1->destampar();
		$c1->rabiscar();

		$c2 = new Caneta;
		$c2->modelo = "Rock Feller";
		$c2->cor = "Dourada";
		$c2->ponta = 0.3;
		$c2->rabiscar();

		print_r($c1);
		echo "</br>";
		print_r($c2);

	?>
</body>
</html>