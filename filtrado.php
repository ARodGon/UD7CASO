<?php
//cargamos la clase de conexión
include 'dbNBA.php';
//Generamos un nuevo objeto conexion
$conexion=new dbNBA();
?>
<!--creamos una tabla en la que se mostrarán los resultados de la consulta-->
<table>
  <tr>
    <th>id</th>
    <th>local</th>
    <th>visitante</th>
    <th>fecha</th>
    <th>temporada</th>
  </tr>
<?php
  //almacenaremos las superglobals POST en diferentes variables que serán utilizadas en la consulta sql
  $local=$_POST['local'];
  $visitante=$_POST['visitante'];
  $temporada=$_POST['temporada'];

  //creamos la consulta sql
  $consulta="SELECT * FROM partidos WHERE local='$local' AND visitante='$visitante' AND temporada='$temporada'";
  //ejecutamos la consulta
  $ejecutarConsulta = mysqli_query($conexion, $consulta);
  //contabilizamos el total de líneas obtenidas al ejecutar la consulta
  $verFilas = mysqli_num_rows ($ejecutarConsulta);
  //Obtienemos cada fila de resultados como un array asociativo
  $fila= mysqli_fetch_array ($ejecutarConsulta);

  if (!$ejecutarConsulta) {
    echo "Error en la consulta";
  } else {
    if ($verFilas<1) {
      //si no encontramos resultados
      echo "<tr><td>No existen coincidencias</td></tr>";
    } else {
      //imprime los resultados obtenidos de la consulta
      for ($i=0; $i<=$fila; $i++) {
        echo '
          <tr>
            <td>'.$fila[0].'</td>
            <td>'.$fila[1].'</td>
            <td>'.$fila[2].'</td>
            <td>'.$fila[3].'</td>
            <td>'.$fila[4].'</td>
          </tr>';
          $fila= mysqli_fetch_array ($ejecutarConsulta);
      }
    }
  }
?>
</table>
