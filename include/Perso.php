<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Espace Personnel</title>
	</head>
	<body>
		<?php
			if (!isset($_SESSION['Login']) || isset($_SESSION['Mdp']))
				include("Connexion.php");
			else
				include("");
		?>
	</body>
</html>