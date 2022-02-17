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
		$x = 8 - 6.4;
		$y = 1.6;

		#Muestra los valores de $x e $y 
		echo $x . "<br>";
		echo $y . "<br>";

		#Muestra el tipo de variable y el contenido
		var_dump($x);
		echo "<br>";
		var_dump($y);
		echo "<br>";

		#Condición que muestra si tienen o no el mismo contenido
		if ($x == $y) {
			echo "Iguales";
		} else {
			echo "Distintos";
		}

		#Muestra en valor booleano si $x y $y son iguales
		echo "<br>";
		var_dump($x == $y);

		#Redondea los valores de las variable y las comparada de nuevo
		echo "<br>";
		$x = round ($x,2);
		$y = round ($y,2);

		var_dump($x == $y); 
		
	?>
</body>
</html>