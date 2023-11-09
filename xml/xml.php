<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccion</title>
</head>
<body>
    <?php 
    echo '
    <form action="provincias.php" method="post">
        <p>Seleccione la provincia de la que desea obtener el tiempo</p>
        <select name="provincias" id="provincias">
            <option value="madrid">Madrid</option>
            <option value="alcorcon">Alcorcón</option>
            <option value="mostoles">Móstoles</option>
        </select><br><br>
        <input type="submit" value="Ver">
    </form>
    ';
    //Crea una aplicación en la que, con un desplegable, elija entre 3 municipios, y al dar a "VER" se muestre una tabla en la que salgan 
    //las temperaturas mínima y máxima de los próximos días.
    
    ?>
</body>
</html>