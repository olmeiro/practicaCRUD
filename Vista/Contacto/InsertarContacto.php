<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <link rel="stylesheet" href="css/estiloClientes.css"> -->
        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Clientes</title>
    </head>
    <body>
        <div class="container">

        <nav class="navbar navbar-dark bg-primary">
                    <!-- Navbar content -->
                    <a class="navbar-brand" href="#">Registro Clientes Kreemo</a>
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
            <form action="../../Controlador/ControladorContacto.php" method="POST">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="Nombre">Nombre del contacto</label>
                    <input type="text" class="form-control" id="Nombre" required name="Nombre">
                    <small id="valNombre" class="form-text text-muted">
                        Ingrese nombre del contacto, sólo caracteres.
                      </small>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="Apellido_1">Primer Apellido</label>
                    <input type="text" class="form-control" id="Apellido_1" name="Apellido_1" required>
                    <small id="valApellido_1" class="form-text text-muted">
                        Ingrese primer apellido del contacto, sólo caracteres.
                      </small>
                  </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="Apellido_2">Segundo apellido</label>
                      <input type="text" class="form-control" id="Apellido_2" name="Apellido_2">
                      <small id="Apellido_2" class="form-text text-muted">
                        Ingrese segundo apellido del contacto, sólo caracteres.
                      </small>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="Documento">Documento</label>
                      <input type="number" class="form-control" id="Documento" name="Documento" required>
                      <small id="valDocumento" class="form-text text-muted">
                        Ingrese documento del contacto, sólo valores númericos.
                      </small>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="Correo">Correo Electrónico</label>
                      <input type="Correo" class="form-control" id="Correo" name="Correo" required>
                      <small id="valCorreo" class="form-text text-muted">
                        Ingrese correo del contacto.
                      </small>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="Telefono">Teléfono</label>
                      <input type="number" class="form-control" id="Telefono" name=Telefono required>
                      <small id="valTelefono" class="form-text text-muted">
                        Ingrese teléfono del contacto, sólo valores númericos.
                      </small>
                    </div>
                  </div>
                   
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="Cargo">Cargo</label>
                      <input type="text" class="form-control" id="Cargo" name="Cargo">
                      <small id="valCargo" class="form-text text-muted">
                        Ingrese cargo del contacto, sólo caracteres.
                      </small>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <div class="custom-control custom-radio">
                      <input type="radio" value="1" id="customRadio1" name="Estado" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio1">Contacto Activo</label>
                    </div>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" value="0" id="customRadio2" name="Estado" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio2">Contacto Inactvo</label>
                    </div>
                      <small id="customRadio2" class="form-text text-muted">
                        Elija estado del contacto.
                      </small>
                    </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-12">
                        <input type="hidden" name="Registrar" id="Registrar">
                        <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                        <button type="button" class="btn btn-secondary btn-lg">Limpiar</button>
                        <button type="button" class="btn btn-success btn-lg">Volver</button>
                      </div>
                  </div>
                
              </form>
        </div>
        
    </body>
    <!-- <script src="../js/Contacto/contacto.js"></script> -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>