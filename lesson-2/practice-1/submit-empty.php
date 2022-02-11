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
			$error = "You didn't provide a name!";
			$name = (isset($_POST['name']) && !empty($_POST['name'])) ? $_POST['name'] : $error;
			echo "Hi, $name";
		?>
	</body>
</html>
