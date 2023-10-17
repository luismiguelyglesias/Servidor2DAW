<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php 
    $marcasForm = fopen("form.csv", "a+") or die("Unable to open file!");
    $marca = $_POST["marca"];
    $nombre = $_POST["nombre"];
    $matricula = $_POST["matricula"];
    $telf = $_POST["telf"];
    $email = $_POST["email"];
    $radio = $_POST["radio"];
    if (isset($_POST["hora1"])) {
        $hora1 = $_POST["hora1"];
    } else {
        $hora1 = null;
    }
    if (isset($_POST["hora2"])) {
        $hora2 = $_POST["hora2"];
    } else {
        $hora2 = null;
    }
    if (isset($_POST["hora3"])) {
        $hora3 = $_POST["hora3"];
    } else {
        $hora3 = null;
    }
    if($hora1 == null){
        $hora1;
    }
    if($hora2 == null){
        $hora2;
    }
    if($hora3 == null){
        $hora3;
    }
    $conc = "$nombre,$matricula,$telf,$email,$radio,$hora1,$hora2,$hora3,$marca\n";
    fwrite($marcasForm, $conc);
    fclose($marcasForm);
    echo "<table>
        <tr>
            <th>Nombre:</th>
            <th>$nombre</th>
        </tr>
        <tr>
            <th>Matricula:</th>
            <th>$matricula</th>
        </tr>
        <tr>
            <th>Teléfono:</th>
            <th>$telf<th>
        </tr>
        <tr>
            <th>Email:</th>
            <th>$email</th>
        </tr>
        <tr>
            <th>Seguro:</th>
            <th>$radio</th>
        </tr>
        <tr>
            <th>Turno/s:</th>
            <th>$hora1</th>
            <th>$hora2</th>
            <th>$hora3</th  
        </tr>
    </table>";
    //echo $radio . " quiere seguro";
    
    ?>
</body>

</html>