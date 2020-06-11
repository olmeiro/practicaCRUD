<?php

session_start();

if (!(isset($_SESSION["Nombre"]))) {
 header("location:../../Index.php");    
}


require_once('../../conexion.php');
require_once('../Modelo/Empresa.php');
require_once('../Modelo/CrudEmpresa.php');

$CrudEmpresa = new CrudEmpresa();
$ListaEmpresa = $CrudEmpresa->ListarEmpresa();

//var_dump($ListaCotizacion);

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
          <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
               <h5 class="my-0 mr-md-auto font-weight-normal">Kreemo Solution System</h5>
               <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 text-dark" href="../../Cotizacion/Vista/ListarCotizacion.php">Cotizaciones</a>
               </nav>
               <a class="btn btn-outline-primary" href="../../CerrarSesion.php">Cerrar Seccion</a>
          </div>

          <h1 align="center">EMPRESAS</h1>
          <br>
          <ul class="nav nav-fill">
               <li class="nav-item">
               <button type="button" class="btn btn-outline-info"><a class="nav-link active" href="CrearEmpresa.php">Crear Nueva Empresa</a></button>
               </li>
               <li class="nav-item">
               <button type="button" class="btn btn-outline-info"><a class="nav-link active" href="../../TCPDF/examples/reportepdfempresa.php" target="_blank">Reporte de  Empresas</a></button>
               </li>
          </ul>
          <br>
          <table class="table table-bordered">
               <thead class="thead-dark">
                    <tr>
                    <th scope="col">Id Eempresa</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
               </thead>
               <tbody>
               <?php
               foreach($ListaEmpresa as $Empresa) {
                    ?>
                    <tr>
                    <td><?php echo $Empresa->getIdEmpresa();?></td>
                    <td><?php echo $Empresa->getEmpresa();?></td>
                    <td><?php echo $Empresa->getCiudad();?></td>
                    <td><?php echo $Empresa->getDireccion();?></td>
                    <td>
                    <a href="EditarEmpresa.php?IdEmpresa=<?php echo $Empresa->getIdEmpresa();?>">Editar</a> 
                    </td>
                    <td>
                    <a href="../Controlador/ControladorEmpresa.php?IdEmpresa=<?php echo $Empresa->getIdEmpresa();?>&Accion=EliminarEmpresa">Eliminar</a> 
                    </td>

                    
                    <?php
               }
               ?>
               </tbody>
          </table>

          <button type="button" class="btn btn-outline-info"><a class="nav-link active" href="../../Navegacion.php">Volver</a></button>
     </div>

     
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>