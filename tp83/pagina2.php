<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consulta de artículos</title>
  <style>
    .tablalistado {
      border-collapse: collapse;
      box-shadow: 0px 0px 8px #000;
      margin: 20px;
    }

    .tablalistado th {
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffd040;
    }

    .tablalistado td {
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffdd73;
    }
  </style>
</head>

<body>

  <?php
  $mysql = new mysqli("localhost", "root", "", "lindavista");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $registros = $mysql->query("select * from viviendas order by precio_vivienda asc") or
    die($mysql->error);   

    if ($registros->num_rows == 0) 
    echo 'No hay viviendas en la base de datos'; 
  else { 
    echo '<table border="1">'; 
    echo '<tr>'; 
    echo '<th>Id vivienda</th>';
    echo '<th>Tipo vivienda</th>'; 
    echo '<th>Zona vivienda</th>'; 
    echo '<th>Direccion vivienda</th>'; 
    echo '<th>Numero de dormitorios</th>'; 
    echo '<th>Precio vivienda</th>'; 
    echo '<th>Tamaño vivienda</th>'; 
    echo '<th>Extras vivienda</th>'; 
    echo '<th>Foto vivienda</th>'; 
    echo '<th>Observaciones vivienda</th>'; 
    echo '</tr>'; 
    while ($reg = $registros->fetch_array()) { 
      echo '<tr>';
      echo '<td>' . $reg['id_viviendas'] . '</td>';
      echo '<td>' . $reg['tipo_vivienda'] . '</td>'; 
      echo '<td>' . $reg['zona_vivienda'] . '</td>'; 
      echo '<td>' . $reg['direccion_vivienda'] . '</td>'; 
      echo '<td>' . $reg['ndormitorios_vivienda'] . '</td>'; 
      echo '<td>' . $reg['precio_vivienda'] . '</td>'; 
      echo '<td>' . $reg['taman_vivienda'] . '</td>'; 
      echo '<td>' . $reg['extras_vivienda'] . '</td>'; 
      echo '<td>' . $reg['foto_vivienda'] . '</td>'; 
      echo '<td>' . $reg['observaciones_vivienda'] . '</td>'; 
      echo '</tr>'; 
    } 
    echo '</table>'; 
  }
  $mysql->close();

  ?>
</body>

</html>