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

  $CrudEstado = new CrudEstado(); //Crear un objeto tipo CrudCompetencia
  $Estado = $CrudEstado::ObtenerEstado($_GET["IdEstado"]);

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
                    <a class="navbar-brand" href="#">Editar Contactos Kreemo</a>
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
            <form action="../Controlador/ControladorContacto.php" method="POST" id="frmEditarEstado" name="frmEditarEstado">

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="Nombre">Estado del contacto</label>
                    <input type="text" class="form-control" id="Estado" name="Estado"  value="<?php echo $Estado->getEstado(); ?>" >
                    <small id="valEstado" class="form-text text-muted">
                        Ingrese modificación de estado del contacto, sólo caracteres.
                      </small>
                    <label for="Estado" id="valEstado" ></label>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-12">
                        <input type="hidden" name="Modificar" id="Modificar">
                        <button type="submit" class="btn btn-primary btn-lg" name="Modificar" id="Modificar">Modificar</button>
                        <button type="button" class="btn btn-secondary btn-lg" onclick=limpiar() id="BtnLimpiar">Limpiar</button>
                        <button type="button" class="btn btn-outline-dark  btn-lg"><a href="listarEstado.php" style="color:black;">Volver</button>
                      </div>
                  </div>
                
              </form>

     </div>
  
  </body>
    <script src="js/main2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>
