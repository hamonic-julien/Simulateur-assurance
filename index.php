<?php
require 'data.php';
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>O'ssurance</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		
		<img class="float" src="images/voitures.jpg" alt="voitures accidents">
		<h1>O'ssurance</h1>
		<h2>Calcul du tarif de votre client</h2>
		<div>
			<form action="" method="GET">
				<label for="age">Age</label>
				<input type="number" id="age" name="age" required>
				<label for="year">Années de permis</label>
				<input type="number" id="year" name="year" required>
				<label for="accidents">Nombre d'accidents responsables</label>
				<input type="number" id="accidents" name="accidents" required>
				<label for="assurer">Années chez son assureur</label>
				<input type="number" id="assurer" name="assurer" required>
				<input type="submit" id="submit" name="submit" value="Calculer le tarif">

			</form>
		</div>
		<p><?= $message;?></p>
	</body>
</html>
