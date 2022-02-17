<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		#Declaración de variables

		$a = 1.23456789;
		$b = 1.23456780;
		$epsilon = 0.00001;

		#Muestra el valor de la resta $a - $b
		echo $a - $b;
		echo "<br>";
		var_dump($a-$b);
		echo "<br>";

		/*
		Crea una condición que muestra un true si el valor absoluto
		de $a - $b es < que $epsilon
		*/
		if (abs($a-$b) < $epsilon) {
			echo "true";
		}
	?>
</body>
</html>