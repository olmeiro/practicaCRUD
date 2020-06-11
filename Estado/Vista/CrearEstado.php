<?php

session_start();

if(!(isset($_SESSION["Nombre"]))) //si la sesión no existe redireccionar al login:
{
  //redireccionar al al login:
  header("Location:../../index.php");
}

  require_once('../../conexion.php');


  $mysqli = new mysqli('localhost', 'root', '', 'practica_crudk');

 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <link rel="stylesheet" href="css/estiloClientes.css"> -->
        <!-- CSS only -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Clientes</title>
    </head>
    <body>
        <div class="container">

        <nav class="navbar navbar-dark bg-primary">
                    <!-- Navbar content -->
                    <a class="navbar-brand" href="#">Crear Estado De Clientes Kreemo</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                      </ul>
                    </div>
                  </nav>

        <h1 align="center">Creación de Estado:</h1>
         
          <br>

            <form action="../Controlador/ControladorEstado.php" method="POST" id="frmInsertarEstado" name="frmInsertarEstado">
            <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="Nombre">Id Del Estado</label>
                    <input type="text" class="form-control" id="IdEstado" name="IdEstado">
                    <small id="valIdEstado" class="form-text text-muted">
                        Ingrese Id del estado, no puede ser igual a los existentes.
                      </small>
                      <label for="IdEstado" id="valIdEstado"></label>
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="Nombre">Nombre nuevo del estado del Cliente</label>
                    <input type="text" class="form-control" id="Estado" name="Estado">
                    <small id="valEstado" class="form-text text-muted">
                        Ingrese nombre del estado, sólo caracteres.
                      </small>
                      <label for="Estado" id="valEstado"></label>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-12">
                        <input type="hidden" name="Registrar">
                        <button type="submit" class="btn btn-primary btn-lg" id="Registrar" name="Registrar">Crear Estado</button>
                        <br>
                      </div>
                  </div>
            </form>
            <div class="form-row">
                      <div class="form-group col-md-12">
                      <button type="button" class="btn btn-outline-info btn-s" style="margin-left: 50px;"><a class="nav-link active" href="../../Contactos/Vista/listarContacto.php">Volver</a></button>
                      </div>
                  </div>
            
        </div>
        
    </body>
    <script src="js/main.js"></script>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>