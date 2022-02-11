<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>XSS Attack!</title>
	  <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
	  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	</head>
	<body>
		<header class="header">
			<h1>Hello world</h1>
		</header>
		<?php
			/*
			 * preg_replace sustituye coincidencias, por lo que debemos eliminar
			 * la posibilidad de inclusión de etiquetas
			 *
			 * [ Indica el inicio de un grupo de posibilidades
			 * < Indica el carácter < explícitamente
			 * > Indica el carácter > explícitamente
			 * ] Indica el fin de un grupo de posibilidades
			*/
			$pattern = '/[<>]/';
			$error = "You didn't provide a name!";
			$name = (isset($_POST['name']) && !empty($_POST['name'])) ? preg_replace($pattern, " #!## ", $_POST['name']) : $error;

			// Si encontramos nuestro patrón introducido en pre_replace cambiamos la salida
			echo strpos($name, "#!##" ) ? "Don't be evil" : "Hi, $name";
		?>
	</body>
</html>
