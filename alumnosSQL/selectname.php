<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,tr{
            border: 1px black solid;
        }
    </style>
</head>

<body>
    <form method="post">
        <label for='nom'>Introduzca un nombre para buscar: </label>
        <input type='text' name='nom' id='nom'><br>
        <input type="submit" value="Buscar">
    </form>
    <?php
    $host = 'localhost';
    $db = 'escuela';
    $user = 'root';
    $password = '';
    $dsn = "mysql:host=localhost;dbname=escuela;charset=UTF8";
    $pdo = new PDO($dsn, $user, $password);

    if (isset($_POST["nom"])) {
        $name = $_POST["nom"];

        $stmt = $pdo->prepare("SELECT * FROM alumnos WHERE nombre like :nom");
        $stmt->execute(['nom' => "%$name%"]);
        $data = $stmt->fetch();

        echo "<table>";
        echo "<tr>";
        echo "<th>Alumno buscado: </th>";
        echo "</tr>";
        if ($data) {
            echo "<tr>" . "<td>" . "Nombre: " . $data['nombre'] . "</td>" . "</tr>";
            echo "<tr>" . "<td>" . "Apellido: " . $data['apellido'] . "</td>" . "</tr>";
        } else {
            echo "No se encontraron resultados.";
        }
        echo "</table>";
    }
    ?>
</body>

</html>