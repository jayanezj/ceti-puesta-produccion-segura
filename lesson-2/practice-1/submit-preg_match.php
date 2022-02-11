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
				 * ^ Indica que es el principio de la cadena
				 * [ Indica el inicio de un grupo de posibilidades
				 * \p{L} Indica cualquier tipo de letra en cualquier idioma
				 * \p{M} Indica cualquier tipo de letra combinada con un acento, diéresis, etc, en cualquier idioma
				 * \d Indica cualquier dígito
				 * ] Indica el fin de un grupo de posibilidades
				 * + Indica que el grupo de posibilidades aparezca una vez al menos e ilimitadas veces
				 * $ Indica el fin de la cadena
				*/
				$pattern = '/^[\p{L}\p{M}\d]+$/';
				$validate = preg_match($pattern, $_POST['name']);
				$error = "You didn't provide a name!";
				$name = (isset($_POST['name']) && !empty($_POST['name'])) ? $_POST['name'] : $error;
				echo ($validate != 0) ? "Hi, $name" : (($name == $error) ? $error : "Don't be evil!");
		?>
	</body>
</html>
