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
	for ($i = 1; $i <= 50; $i++) {

			#Hace el cuadrado del $i y lo muestra
			echo "$i x $i = ";
			$n1 =  $i * $i;
			
			echo $n1 . "<br>";

			#Recoge el resultado de la variable sumandolo al enterior
			$s = $s + $n1;
	}

	#Muestra el resultado total
	echo "<br>" . "La suma de todas los números al cuadrado es: " . $s;
	?>
</body>
</html>