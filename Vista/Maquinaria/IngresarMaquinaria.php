<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquinaria</title>
    <link rel="stylesheet" href="../../css/Maquinaria/Maquinaria.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="background-color: rgb(0, 0, 0);">

    <div style="background-color: #B52407;" class="card text-white mb-3">
        <div class="card-header">Ingrese los datos para agendar una máquina </div>
        <div class="card-body">
    <form id="FrmMaquinaria" name="FrmMaquinaria" action="../../Controlador/ControladorMaquinaria.php" method="POST">
        <div class="form-group"style="text-align:center;">
        Nombre de la obra:
        <br>
        <input title="escriba aca el nombre de la empresa" type="text" id="nombreempresa" name="nombreempresa"/>
        <label id="validacion_nombreempresa"></label>
        <br>
        </div>
        <div class="form-group"style="text-align:center;">
            Director de la obra:
            <br>
            <input type="text" id="directorobra" name="directorobra"/>
            <label id="validacion_directorobra"></label>
            <br>
        </div>
          <div class="form-group"style="text-align:center;">
            Constructora:
            <br>
            <input type="text" id="constructora" name="constructora"/>
            <label id="validacion_constructora"></label>
            <br>
          </div>
          <div class="form-group"style="text-align:center;">
            Fecha de servicio:
            <br>
            <input type="date" id="mes" name="mes"/>
            <label id="validacion_mes"></label>
            <br>
          </div>
          <div class="form-group"style="text-align:center;">
            Máquina:
            <br>
            <input id="maquina" name="maquina">
            <label id="validacion_maquina"></label>
            <br>
          </div>
          <div class="form-group"style="text-align:center;">
            Operario 1:
            <br>
            <input type="text" id="operario1" name="operario1"/>
            <label id="validacion_operario1"></label>
            <br>
          </div>
          <div class="form-group"style="text-align:center;">
            Operario 2:
            <br>
            <input type="text" id="operario2" name="operario2"/>
            <label id="validacion_operario2"></label>
            <br>
          </div>

          <input type="hidden" name="CrearMaquina" id="CrearMaquina">
          <button type="submit"  class="btn btn-secondary" name="btnregistrar_maquina" id="btnregistrar_maquina">Registrar</button>
          <!-- <button  class="btn btn-secondary" name="btnlimpiar" id="btnlimpiar">Limpiar</button>
          <button  class="btn btn-secondary" name="btnconsultar_maquina" id="btnconsultar_maquina">Consultar</button>
          <button  class="btn btn-secondary" name="btnVolver" id="btnVolver" onclick="location.href='practicacrud/navegar.php'"> Volver</button> -->
    </form>

    <p align="center" id="RespuestaTransaccion">Utilice el boton registrar para saber si el envio de datos fue exitosa o no</p>

    <footer>
      <div class="footer" style="margin-top: 5rem; color: black;">
        <i><b>GIVER CIFUENTES.</b></i>
      </div>
    </footer>

</div>
</div>

</body>
<!-- <script src="../../js/Maquinaria/Maquinaria.js"></script> -->
</html>