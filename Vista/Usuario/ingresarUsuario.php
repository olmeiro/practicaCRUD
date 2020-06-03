<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosU.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <title>Registrar</title>
</head>
<body style="background-color: darkgray">
<div class="container">
    <form name="frmUsuarios" id="frmUsuarios" method="POST" action="../../Controlador/ControladorUsuario.php">
    <div class="card text-white mb-3" style="max-width: 27rem;" id="containerR">
        <div class="card-header" style="background-color: #B52407;"><h1>Registrar Usuario</h1></div>
            <div class="card-body">
                <div class="container">
                    <main>
                            <div class="row">
                                <div class="col s12 l10">
                                <!-- <div class="input-fiel col s12">
                                        <label>ID Usuario:</label>
                                       <input type="text" name="idUsuario" id="idUsuario" placeholder="Id Usuario">
                                    <label id="validar_tipoDocumento" class="color_rojo"></label>
                                    </div> -->
                                    <div class="input-fiel col s12">
                                        <label>Nombre:</label>
                                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="solo_letras" maxlength="20">
                                        <label id="validar_nombre"  class="color_rojo"></label>
                                    </div>
                                    <div class="input-fiel col s12">
                                        <label>Password: </label>
                                        <input type="password" name="clave" id="clave" placeholder="clave" >
                                        <label  class="color_rojo"></label>
                                    </div>
                                    <div class="input-fiel col s12">
                                        <label>Tipo Usuario:</label>
                                        <input type="text" name="tipoUsuario" id="tipoUsuario" placeholder="Tipo Usuario" >
                                        <label id="validar_tipoUsuario" class="color_rojo"></label>
                                    </div>
                                    <div class="input-fiel col s12">
                                        <label>Estado: </label>
                                        <input type="text" name="estado" id="estado" placeholder="Estado">
                                        <label id="validar_estado" class="color_rojo"></label>
                                    </div>
                                    <div class="input-fiel col s12">
                                        <div class="botones">
                                            <button type="submit" class="btn btn-secondary" class="boton" id="btnRegistrarUsuario" name="btnRegistrarUsuario"> Registrar</button>
                                            <button type="button" class="btn btn-secondary" name="boton" id="btnLimpiar"> Limpiar</button>
                                            <button type="button" class="btn btn-secondary" name="boton" id="btnVolver" onclick="location.href='index.html'"> Volver</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </main>
                </nav>
            </div>
    </form>
</div>
    <p align="center" id="respuestaTransaccion" style="color: black;">
    Mensaje</p>
    <footer style="background-color: #B52407; color: aliceblue; margin-top: 40Px;"  >
        <div style="text-align: center;">
        <b >&COPY; Carolina Nicholls Giraldo</b>
        </div>
    </footer>
</body>
<script src="js/funcionesU.js"></script>
</html>