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
	$n1 = 0;
	$s = 0;

	#Recorre los números del 1 al 100 incrementando el valor de $i + 1 
	for ($i = 1; $i <= 100; $i++) {

		#Condición que si el resto de $i / 2 = 1 la muestre y la sume a la variable $s
		if (($i % 2) == 1) {

			echo $i . "<br>"; 

			#Recoge el resultado de la variable sumandolo al enterior
			$s = $s + $i;
		}
	}

	#Muestra el resultado total
	echo "<br>" . "El resultado de la suma de todos los números impares es: " . $s;
	?>
</body>
</html>