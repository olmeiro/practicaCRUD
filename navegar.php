<?php

session_start();

if(!(isset($_SESSION["Nombre"]))) //si la sesión no existe redireccionar al login:
{
  //redireccionar al al login:
  header("Location:index.php");
}

// echo $_SESSION["NombreUsuario"];
// echo "Rol: " . $_SESSION["IdRol"];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Index Kreemo</title>
     <link rel="stylesheet" href="css/estilosIndex.css"></link>

     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

     <header class="header">
     <h1 align="center">Modulos Kreemo</h1>
     </header >
     <section class="section-1" align="center">

          <div class="section-1_card" align="center"><a type="submit" href="Vista/Usuario/ingresarUsuario.php">Agenda Usuarios</a></div>
          <div class="section-1_card" align="center"><a type="submit" href="Contactos/Vista/listarContacto.php">Gestion Clientes</a></div>
          <div class="section-1_card" align="center"><a type="submit" href="Vista/Visitas/ingresarVisitas.php">Agenda de Visitas</a></div>
     </section>
     <section class="section-1">
          <div class="section-1_card" align="center"><a type="button" href="Cotizacion/Vista/ListarCotizacion.php">Cotizaciones</a></div>
          <div class="section-1_card" align="center"><a type="button" href="Vista/Maquinaria/IngresarMaquinaria.php">Agenda Maquinaria</a></div>
          <div class="section-1_card" align="center"><a type="button" href="Empresa/Vista/ListarEmpresa.php">Empresas</a></div>
          <div class="section-1_card" align="center"><a type="button" href="">Encuestas</a></div>

     </section>
     <section class="section-2">
     <a href="CerrarSesion.php">Cerrar sesión</a>
     </section>
     <footer class="footer">

     </footer>
</body>


</html>