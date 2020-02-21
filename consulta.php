<?php
  // require = "conecta.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta de IUSI - Municipalidad de Jalapa</title>
    <!-- <link rel="icon" type="image/png" href="images/favicon.png" /> -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/media.css" media="screen and (max-width:768px)"/> -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<i class="icon-menu burger-button" id="burger-menu"></i>
    <header class="header">
      <div class="container">
        <figure class="logo">
          <img src="images/logo2.png" height="50" alt="Logo de http://munijalapa.com" class="logo2"/>
        </figure>
        <nav class="menu">
          <ol>
            <li>
              <a class="link" href="index.php">Regresar a IUSI</a>
            </li>
            <!-- <li>
              <a class="link" href="#eventos">Decreto Ley</a>
            </li>
            <li>
              <a class="link" href="#contacto">Muni Jalapa</a>
            </li> -->
          </ol>
        </nav>
      </div>
    </header>
<body class="consulta">
  
  <?php

require ('conecta.php');

$search = $_POST['search'];

$conecta = mysqli_connect( $db_host, $db_user, $db_pasword);
if ( mysqli_connect_errno() ){
  echo "Error al conectar con el servidor";
  exit();
}
mysqli_select_db($conecta, $db_name) or die ('Error al concectar con la Base de Datos');
mysqli_set_charset($conecta, 'utf-8');

$query = "SELECT * FROM dpi WHERE dpi = '$search'";

$resultado = mysqli_query($conecta, $query);

?>
<h1 align="center"> Resultado de la Busqueda </h1>
<table widht ="70%" border="1" align = "center" class="tabla1">
  <tr align="center">
    <td>DPI</td>
    <td>Primer Nombre</td>
    <td>Segundo Nombre</td>
    <td>Primer Apellido</td>
    <td>Segundo Apellido</td>
    <td>Total</td>
  </tr> 
  <?php

if ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
  ?>  
  
    <tr>
      <td><?php echo $fila['dpi']?> </td>
      <td><?php echo $fila['nombre1']?></td>
      <td><?php echo $fila['nombre2']?></td>
      <td><?php echo $fila['apellido1']?></td>
      <td><?php echo $fila['apellido2']?></td>
      <td><?php echo $fila['total']?></td>
      <!-- // echo "<br>"; -->
    </tr>

  <?php
      }else {
        ?>
         <h1 align="center"><?php echo "DPI no aparece en el Registro de Catastro" ?></h1>
         
    <?php  
    mysqli_close($conecta);
  }
?>
</table>
<div class="container">
  <h3 align="center">Estimado Vecino, le agradecemos el cumplimiento en el pago del <br>IUSI para el mejoramiento del ornato de Nuestro Querido Municipio</h3>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h3>Trabajando Juntos por una Jalapa Mejor!!!</h3>
</div>
</body>
</html>