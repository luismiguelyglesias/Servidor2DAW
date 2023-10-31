<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>

<body>
    <?php
    if (isset($_POST["registro"])) {
        $usuario = $_POST["usr"];
        $contrasena = $_POST["pwd"];

        if (!empty($usuario) && !empty($contrasena)) {
            $usuarios = fopen("usuarios.csv", "a+");
            $linea = "$usuario, $contrasena\n";
            fwrite($usuarios, $linea);
            fclose($usuarios);
            echo "Registro exitoso. Ahora puedes <a href='login.php'>iniciar sesión</a>.";
        } else {
            echo "Por favor, complete todos los campos.";
        }
    }
    ?>

    <h2>Registro de Usuario</h2>
    <form action="" method="post">
        <label for="usr">Usuario:</label>
        <input type="text" name="usr" id="usr">
        <br>
        <label for="pwd">Contraseña:</label>
        <input type="password" name="pwd" id="pwd">
        <br>
        <input type="submit" name="registro" value="Registrarse">
    </form>
</body>

</html>
