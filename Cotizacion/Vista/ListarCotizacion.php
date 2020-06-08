<?php
require_once('../../conexion.php');
require_once('../Modelo/Cotizacion.php');
require_once('../Modelo/CrudCotizacion.php');

$CrudCotizacion = new CrudCotizacion();
$ListaCotizacion = $CrudCotizacion->ListarCotizacion();

?>



<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Listar Cotizacion</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
     <div class="container">
     <h1 align="center">Cotizaciones</h1>
          <ul class="nav">
               <li class="nav-item">
                    <a class="nav-link active" href="IngresarCotizacion.php">Crear Cotizacion</a>
               </li>
          </ul>
          <table class="table table-responsive">
               <thead class="thead-dark">
                    <tr>
                    <th >Cotización</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Etapa</th>
                    <th scope="col">Jornada</th>
                    <th scope="col">Modalidad</th>
                    <th scope="col">Tipo de Concreto</th>
                    <th scope="col">IVA</th>
                    <th scope="col">LOZAS</th>
                    <th scope="col">METROS CUBICOS</th>
                    <th scope="col">METROS TUBERIA</th>
                    <th scope="col">VALOR METRO</th>
                    <th scope="col">VALOR TOTAL</th>
                    <th scope="col">OBSERVACIONES</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">ELIMINAR</th>
                    </tr>
               </thead>
               <tbody>
               <?php
               foreach($ListaCotizacion as $Cotizacion) {
                    ?>
                    <tr>
                    <td><?php echo $Cotizacion->getIdCotizacion();?></td>
                    <td><?php echo $Cotizacion->getIdEmpresa();?></td>
                    <td><?php echo $Cotizacion->getIdEstado();?></td>
                    <td><?php echo $Cotizacion->getIdEtapa();?></td>
                    <td><?php echo $Cotizacion->getIdJornada();?></td>
                    <td><?php echo $Cotizacion->getIdModalidad();?></td>
                    <td><?php echo $Cotizacion->getIdTipo_Concreto();?></td>
                    <td><?php echo $Cotizacion->getIva();?></td>
                    <td><?php echo $Cotizacion->getLozas();?></td>
                    <td><?php echo $Cotizacion->getMetros_cubicos();?></td>
                    <td><?php echo $Cotizacion->getTuberia();?></td>
                    <td><?php echo $Cotizacion->getValor_Metro();?></td>
                    <td><?php echo $Cotizacion->getValor_Total();?></td>
                    <td><?php echo $Cotizacion->getObservaciones();?></td>
                    <td>
                    <a href="EditarCotizacion.php?IdCotizacion=<?php echo $Cotizacion->getIdCotizacion();?>">Editar</a> 
                    </td>
                    <td>
                    <a href="../../Controlador/ControladorCotizacion.php?IdCotizacion=<?php echo $Cotizacion->getIdCotizacion();?>&Accion=EliminarCotizacion">Eliminar</a> 
                    </td>

                    
                    <?php
               }
               ?>
               </tbody>
          </table>
     </div>

     
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>