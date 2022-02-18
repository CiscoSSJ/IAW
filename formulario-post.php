<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		echo "Buenas " . $_POST['nombre'] . ", su mensaje sobre el asunto " . $_POST['asunto'] . " está enviando con éxito";

		echo "<br>" . "El mensaje es: " . $_POST['mensaje'];
	?>
</body>
</html>