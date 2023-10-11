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
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $telefono = $_POST["telefono"];

  $line = "$nombre,$apellido,$telefono\n";

  $agendaFile = fopen("agenda.csv", "a+") or die("Unable to open file!");

  fwrite($agendaFile, $line);

  fclose($agendaFile);

  $agendaFile = fopen("agenda.csv", "r") or die("Unable to open file");

  $cabecera = false;

  while (($row = fgetcsv($agendaFile)) !== false) {
    list($nombre, $apellido, $telefono) = $row;

    if ($cabecera == false) {
      echo "
            <table>
              <tr>
                <th>Nombre:</th>
                <th>Apellido:</th>
                <th>Telefono:</th>
              </tr>";
      $cabecera = true;
    }

    echo "
          <tr>
            <td>$nombre</td>
            <td>$apellido</td>
            <td>$telefono</td>
          </tr>";
  }

  fclose($agendaFile);
  ?>
</body>

</html>