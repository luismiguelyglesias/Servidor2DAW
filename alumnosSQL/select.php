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
    <?php
    $host = 'localhost';
    $db = 'escuela';
    $user = 'root';
    $password = '';
    $dsn = "mysql:host=localhost;dbname=escuela;charset=UTF8";
    $pdo = new PDO($dsn, $user, $password);

    $data = $pdo->query("SELECT * FROM alumnos")->fetchAll();
    // and somewhere later:
    echo "<table>";
    echo "<tr>";
    echo "<th>Tabla de alumnos</th>";
    echo "</tr>";
    foreach ($data as $fila) {
        echo '<tr>' . '<td>' ."Nombre: " . $fila['nombre'] .'</td>' . '</tr>';
        echo '<tr>' . '<td>' . "Apellido: " . $fila['apellido'] .'</td>' . '</tr>';
    }
    echo "</table>";
    ?>
</body>

</html>