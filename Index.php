<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Index Kreemo</title>
     <link rel="stylesheet" href="css/estilosIndex.css"></link>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

     <header class="header">
     <h1 align="center">Kreemo Landpage</h1>
     </header >
     <section class="section-1" align="center">

     <form action="Controlador/ControladorUsuario.php" method="POST">
          <div class="form-group">
               <label for="exampleInputEmail1">Usuario</label>
               <input type="text" class="form-control" id="Usuario" name="Usuario" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
               <label for="exampleInputPassword1">Password</label>
               <input type="password" class="form-control" id="Password" name="Password">
          </div>
         <input type="hidden" name="Ingresar" id="Ingresar">
          <button type="submit" class="btn btn-primary">Ingresar</button>
     </form>

          
     </section>
     <section class="section-1">
          

     </section>
   
     <footer class="footer">

     </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</html>