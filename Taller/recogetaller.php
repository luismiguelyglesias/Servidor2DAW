<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <?php
        
        $nombre = $_POST["nombre"];
        $matricula = $_POST["matricula"];
        $telf = $_POST["telf"];
        $email = $_POST["email"];
        $radio = $_POST["radio"];
        if(isset($_POST["hora1"])){
            $hora1 = $_POST["hora1"];
        }
        else{
            $hora1 = "";
        }
        if(isset($_POST["hora2"])){
            $hora2 = $_POST["hora2"];
        }
        else{
            $hora2 = "";
        }
        if(isset($_POST["hora3"])){
            $hora3 = $_POST["hora3"];
        }
        else{
            $hora3 = "";
        }
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