<?php

session_start();

if(!(isset($_SESSION["Nombre"]))) //si la sesión no existe redireccionar al login:
{
  //redireccionar al al login:
  header("Location:../../index.php");
}

  require_once('../../conexion.php');
  require_once('../Modelo/Contacto.php');
  require_once('../Modelo/CrudContacto.php');

  $CrudContacto = new CrudContacto(); //Crear un objeto tipo CrudCompetencia
  $Contacto = $CrudContacto::ObtenerContacto($_GET["Documento"]);

  $mysqli = new mysqli('localhost', 'root', '', 'practica_crudk');

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <link rel="stylesheet" href="css/estiloClientes.css"> -->
        <!-- CSS only -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Editar</title>
  </head>
  <body>
  <div class="container">
  <nav class="navbar navbar-dark bg-primary">
                    <!-- Navbar content -->
                    <a class="navbar-brand" href="#">Registro Contactos Kreemo</a>
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
            <form action="../Controlador/ControladorContacto.php" method="POST" id="frmEditarContacto" name="frmEditarContacto">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="Nombre">Nombre del contacto</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre"  value="<?php echo $Contacto->getNombre(); ?>" >
                    <small id="valNombre" class="form-text text-muted">
                        Ingrese nombre del contacto, sólo caracteres.
                      </small>
                    <label for="Nombre" id="valNombre" ></label>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="Apellido_1">Primer Apellido</label>
                    <input type="text" class="form-control" id="Apellido_1" name="Apellido_1" value="<?php echo $Contacto->getApellido_1(); ?>">
                    <small id="valApellido_1" class="form-text text-muted">
                        Ingrese primer apellido del contacto, sólo caracteres.
                      </small>
                      <label for="Apellido_1" id="valApellido1"></label>
                  </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="Apellido_2">Segundo apellido</label>
                      <input type="text" class="form-control" id="Apellido_2" name="Apellido_2" value="<?php echo $Contacto->getApellido_2(); ?>">
                      <small id="Apellido_2" class="form-text text-muted">
                        Ingrese segundo apellido del contacto, sólo caracteres.
                      </small>
                      <label for="Apellido_2" id="valApellido2"></label>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="Documento">Documento</label>
                      <input type="number" class="form-control" id="Documento" name="Documento" value="<?php echo $Contacto->getDocumento();?>">
                      <small id="valDocumento" class="form-text text-muted">
                        Ingrese documento del contacto, sólo valores númericos.
                      </small>
                      <label for="Documento" id="valDocumento"></label>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="Correo">Correo Electrónico</label>
                      <input type="Correo" class="form-control" id="Correo" name="IdCorreo" value="<?php echo $Contacto->getCorreo(); ?>">
                      <small id="valCorreo" class="form-text text-muted">
                        Ingrese correo del contacto.
                      </small>
                      <label for="Correo" id="valCorreo"></label>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="Telefono">Teléfono</label>
                      <input type="number" class="form-control" id="Telefono" name="IdTelefono" value="<?php echo $Contacto->getTelefono(); ?>">
                      <small id="valTelefono" class="form-text text-muted">
                        Ingrese teléfono del contacto, sólo valores númericos.
                      </small>
                      <label for="Telefono" id="valTelefono"></label>
                    </div>
                  </div>
                   
                  <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Cargo">Cargo</label>
                        <input type="text" class="form-control" id="Cargo" name="Cargo"  value="<?php echo $Contacto->getCargo(); ?>">
                        <small id="valCargo" class="form-text text-muted">
                          Ingrese cargo del contacto, sólo caracteres.
                        </small>
                        <label for="Cargo" id="valCargo"></label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Estado del Contacto</label>
                          <select id="Estado"  name= "Estado" class="form-control">
                              <option value="" >Seleccione un Estado</option>
                              <?php
                              $query = $mysqli -> query ("SELECT * FROM estado");
                              while ($valores = mysqli_fetch_array($query)) {
                              echo '<option value="'.$valores[IdEstado].'">'.$valores[Estado].'</option>';
                              }
                              ?>
                          </select>
                          <label for="Estado" id="valEstado"></label>
                        </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-12">
                        <input type="hidden" name="Modificar" id="Modificar">
                        <button type="submit" class="btn btn-primary btn-lg" name="Modificar" id="Modificar">Modificar</button>
                        <button type="button" class="btn btn-secondary btn-lg" onclick=limpiar() id="BtnLimpiar">Limpiar</button>
                        <button type="button" class="btn btn-outline-dark  btn-lg"><a href="../index.php" style="color:black;">Volver</button>
                      </div>
                  </div>
                
              </form>

     </div>
  
  </body>
    <script src="js/main2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>
