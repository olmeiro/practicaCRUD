<?php

// echo "controlador";
require_once('../Modelo/estado.php');
require_once('../Modelo/CrudEstado.php');

 $Estado = new Estado();
 $CrudEstado = new CrudEstado();

if(isset($_POST["Registrar"]))
{
    //echo "Registrar";
    $Estado -> setIdEstado($_POST['IdEstado']);
    $Estado -> setEstado($_POST["Estado"]);
    $CrudEstado::InsertarEstado($Estado);
}
else if(isset($_POST['Modificar']))
{
    $Estado->setIdEstado($_POST['IdEstado']);
    $Estado->setEstado($_POST['Estado']);

    $CrudEstado::ModificarEstado($Estado);
 
}
else if($_GET['Accion']=="EliminarEstado")
{
    $CrudEstado::EliminarEstado($_GET['IdEstado']);
}

?>