<?php

session_start();

if(!(isset($_SESSION["Nombre"]))) //si la sesión no existe redireccionar al login:
{
  //redireccionar al al login:
  header("Location:../../index.php");
}

require_once('../../conexion.php');
require_once('../Modelo/estado.php');
require_once('../Modelo/CrudEstado.php');

$CrudEstado = new CrudEstado();
$ListaEstados = $CrudEstado->listarEstado();
?>



<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Listado De Estados</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
     <div class="container">
     <h1 align="center">Lista De Estados:</h1>
          <ul class="nav nav-fill">
               <li class="nav-item">
               <button type="button" class="btn btn-outline-info"><a class="nav-link active" href="CrearEstado.php">Crear Estado</a></button>
               </li>
          </ul>
          <br>
          <table class="table table-responsive">
               <thead class="thead-dark">
                    <tr>
                    <th scope="col">Id Del Estado</th>
                    <th scope="col">Estados de los contactos</th>
                    <th scope="col">Acción</th>
                    </tr>
               </thead>
               <tbody>
                   <?php
                     foreach ( $ListaEstados as $Estado){
                         ?>
                         <tr>
                              <td>
                                  <?php echo $Estado->getIdEstado(); ?>
                              </td>
                              <td>
                                  <?php echo $Estado->getEstado(); ?>
                              </td>
                              <td>
                                   <a href="EditarEstado.php?IdEstado=<?php echo $Estado->getIdEstado(); ?>">Editar</a>
                                   <a href="../Controlador/ControladorEstado.php?IdEstado=<?php echo $Estado->getIdEstado(); ?>&Accion=EliminarEstado">Eliminar</a>

                              </td>
                         </tr>
                         <?php
                     }
                   ?>
               </tbody>
          </table>
          <button type="button" class="btn btn-outline-dark"><a href="../../Contactos/Vista/listarContacto.php" style="color:black;">Volver</button>

     </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>