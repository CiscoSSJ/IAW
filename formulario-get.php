<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		echo "Buenas " . $_GET['nombre'] . ", su mensaje sobre el asunto " . $_GET['asunto'] . " está enviando con éxito";

		echo "<br>" . "El mensaje es: " . $_GET['mensaje'];
	?>
</body>
</html>
