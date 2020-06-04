<?php

require_once('../Modelo/Visitas/Visitas.php');
require_once('../Modelo/Visitas/crudVisitas.php');


$Visitas = new Visitas();
$CrudVisitas = new CrudVisitas();

if (isset($_POST["Crear"])){

    $Visitas -> setIdVisita(null);
    $Visitas -> setIdObraR($_POST["IdObraR"]);
    $Visitas -> setTipoVisitaR($_POST["TipoVisitaR"]);
    $Visitas -> setEncargadoVisitaR($_POST["EncargadoVisitaR"]);
    $Visitas -> setFechaHoraR($_POST["FechaHoraR"]);
    $Visitas -> setViabilidadR($_POST["ViabilidadR"]);
    $Visitas -> setObservacionesR($_POST["ObservacionesR"]);

    $CrudVisitas::InsertarVisita($Visitas);


}

?>