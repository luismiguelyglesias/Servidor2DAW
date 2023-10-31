<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header("Location: login.php");
        exit();
    }

    function agregarComentario($comentario, $nombreUsuario) {
        $comentarios = fopen("comentarios.csv", "a+");
        $fechaHora = date("Y-m-d H:i:s");
        $linea = "$fechaHora, $nombreUsuario, $comentario\n"; // Agrega el nombre de usuario en la línea de comentario
        fwrite($comentarios, $linea);
        fclose($comentarios);
    }

    if (isset($_POST["comentario"])) {
        $comentario = $_POST["comentario"];
        $nombreUsuario = $_SESSION['username']; // Get the username from the session
        if (!empty($comentario)) {
            agregarComentario($comentario, $nombreUsuario);
        }
    }
    ?>

    <h2>Comentarios</h2>
    <form action="" method="post">
        <label for="comentario">Comentario:</label>
        <input type="text" name="comentario" id="comentario">
        <br>
        <input type="submit" value="Enviar Comentario">
    </form>

    <h2>Comentarios Anteriores</h2>
    <ul>
        <?php
        $comentarios = file("comentarios.csv");
        foreach ($comentarios as $linea) {
            list($fechaHora, $nombreUsuario, $comentario) = explode(", ", $linea);
            echo "<li>($fechaHora) $nombreUsuario: $comentario</li>";
        }
        ?>
    </ul>
</body>

</html>
