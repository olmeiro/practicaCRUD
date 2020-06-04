<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../css/Visitas/estilosV.css">
    <title>Visitas</title>

</head>
<body>

<h1>CREAR UNA CITA</h1>


<form method="post" action="../../Controlador/ControladorVisitas.php">
    
    <input type="text" placeholder="IdObraR" name="IdObraR" required>

    Tipo de Visita<select name="TipoVisitaR" id="TipoVisitaR" required>
        <option value="">Seleccione</option>
        <option value="1">Comercial</option>
        <option value="2">Tecnica</option>
        </select>

    <input type="text" placeholder="EncargadoVisitaR" name="EncargadoVisitaR" required>

    <input type="date" placeholder="FehaHoraR" name="FechaHoraR" required>

    Viabilidad <select name="ViabilidadR" id="ViabilidadR" required>
        <option value="">Seleccione</option>
        <option value="1">SI</option>
        <option value="2">NO</option>
        </select>

    <input type="text" placeholder="ObservacionesR" name="ObservacionesR" required>

    <input type="hidden" name="Crear" id="Crear">
    <button type="submit" name="Crear" id="Crear">Crear</button>

</form>

    
</body>
</html>