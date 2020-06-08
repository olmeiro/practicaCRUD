<?php

  require_once('../../conexion.php');
  require_once('../Modelo/Contacto.php');
  require_once('../Modelo/CrudContacto.php');

  $CrudContacto = new CrudContacto(); //Crear un objeto tipo CrudCompetencia
  $Contacto = $CrudContacto::ObtenerContacto($_GET["Documento"]);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Editar</title>
  </head>
  <body>
    <h1 align="center">Contacto</h1>

    <form id="frmPersona" action="../Controlador/ControladorContacto.php" method="POST">
      IdContacto: <input type="text" name="IdContacto" id="IdContacto"
      value="<?php echo $Contacto->getIdContacto();?>">
      <br>
      Nombre Contacto: <input type="text" name="Nombre" id="Nombre"
      value="<?php echo $Contacto->getNombre(); ?>">
      <br>
      Primer Apellido: <input type="text" name="Apellido_1" id="Apellido_1"
      value="<?php echo $Contacto->getApellido_1(); ?>">
      <br>
      Segundo Apellido: <input type="text" name="Apellido_2" id="Apellido_2"
      value="<?php echo $Contacto->getApellido_2(); ?>">
      <br>
      Documento Contacto: <input type="text" name="Documento" id="Documento"
      value="<?php echo $Contacto->getDocumento();?>">
      <br>
      Estado: <input type="text" name="Estado" id="Estado"
      value="<?php if ($Contacto->getEstado() == "1"){echo "Activo";}else {echo "Inactivo";}?>">
      <br>
      Correo Electrónico: <input type="text" name="IdCorreo" id="Correo"
      value="<?php echo $Contacto->getCorreo(); ?>">
      <br>
      Teléfono contacto: <input type="text" name="IdTelefono" id="Telefono"
      value="<?php echo $Contacto->getTelefono(); ?>">
      <br>
      Cargo del contacto: <input type="text" name="Cargo" id="Cargo"
      value="<?php echo $Contacto->getCargo(); ?>">
      <br>
      <input type="hidden" name="Modificar" id="Modificar" value="">
      <button type="submit" name="button">Modificar</button>
    </form>
     
  
  </body>
  <!-- <script src="../js/main.js"></script> -->
</html>
