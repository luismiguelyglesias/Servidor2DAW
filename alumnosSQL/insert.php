<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form method="post">
		<label for='nom'>Introduzca un nombre para insertar: </label>
		<input type='text' name='nom' id='nom'><br>
		<label for='ape'>Introduzca un apellido para insertar: </label>
		<input type='text' name='ape' id='ape'><br>
		<input type="submit" value="Insertar">
	</form>
	<?php
	$host = 'localhost';
	$db = 'escuela';
	$user = 'root';
	$password = '';
	$dsn = "mysql:host=localhost;dbname=escuela;charset=UTF8";
	$pdo = new PDO($dsn, $user, $password);

	if (isset($_POST["nom"]) && isset($_POST["ape"])) {
		$name = $_POST["nom"];
		$ape = $_POST["ape"];

		$sqlNombre = 'INSERT INTO alumnos(nombre,apellido) VALUES(:name,:ape)';
		$statementNombre = $pdo->prepare($sqlNombre);
		$statementNombre->execute([':name' => $name, ':ape' => $ape]);

		echo 'El nombre ' . $name . ' y apellido ' . $ape . ' han sido insertados';
	}
	?>


</body>

</html>