<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>

<body>
    <?php
    session_start(); // Start the session
    
    if (isset($_POST["login"])) {
        $usuario = $_POST["usr"];
        $contrasena = $_POST["pwd"];

        if (!empty($usuario) && !empty($contrasena)) {
            $usuarios = file("usuarios.csv");
            $loginSuccessful = false;

            foreach ($usuarios as $linea) {
                $parts = explode(", ", $linea);

                if (count($parts) == 2) {
                    list($usuario_registrado, $contrasena_registrada) = $parts;

                    if (trim($usuario) === trim($usuario_registrado) && trim($contrasena) === trim($contrasena_registrada)) {
                        $loginSuccessful = true;
                        break;
                    }
                }
            }

            if ($loginSuccessful) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $usuario;
                header("Location: chat.php");
                exit();
            } else {
                echo "Credenciales incorrectas. Inténtalo de nuevo.";
            }
        } else {
            echo "Por favor, complete todos los campos.";
        }
    }
    ?>


    <h2>Iniciar Sesión</h2>
    <form action="" method="post">
        <label for="usr">Usuario:</label>
        <input type="text" name="usr" id="usr">
        <br>
        <label for="pwd">Contraseña:</label>
        <input type="password" name="pwd" id="pwd">
        <br>
        <input type="submit" name="login" value="Iniciar Sesión"><br>
        <a href='sign_up.php'>No tengo usuario</a>
    </form>
</body>

</html>