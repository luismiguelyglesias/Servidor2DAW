<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $marcas = fopen("marcas.csv", "r") or die("Unable to open file");
    $linea1 = fgetcsv($marcas);
    list($campo1, $value1) = $linea1;
    $linea2 = fgetcsv($marcas);
    list($campo2, $value2) = $linea2;
    $linea3 = fgetcsv($marcas);
    list($campo3, $value3) = $linea3;
    echo '
    <form action="recogetaller_csv.php" method="POST">
        <label for="nombre">Ingrese un nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="matricula">Ingrese una matricula:</label>
        <input type="text" id="matricula" name="matricula" required><br>
        <label for="telf">Ingrese un teléfono:</label>
        <input type="number" id="telf" name="telf" required><br>
        <label for="email">Ingrese un email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="marca">Ingrese una marca:</label>
        <select name="marca" id="marca"><br>
            <option value="' . $value1 . '">' . $campo1 . '</option>
            <option value="' . $value2 . '">' . $campo2 . '</option>
            <option value="' . $value3 . '">' . $campo3 . '</option>
        </select><br>
        <label for="radio">Sí quiero seguro</label>
        <input type="radio" name="radio" id="radio" value="Si"><br>
        <label for="radio2">No quiero seguro</label>
        <input type="radio" name="radio" id="radio2" value="No"><br>
        <label>Horas de llamada:</label><br>
        <input type="checkbox" id="mañana" name="hora1" value="Mañana">
        <label for="mañana">Mañana</label><br>
        <input type="checkbox" id="tarde" name="hora2" value="Tarde">
        <label for="tarde">Tarde</label><br>
        <input type="checkbox" id="noche" name="hora3" value="Noche">
        <label for="noche">Noche</label><br>
        <input type="submit" value="Enviar"> 
    </form>';
    fclose($marcas);
    ?>
</body>

</html>