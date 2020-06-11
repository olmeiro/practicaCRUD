<?php
require_once('../../conexion.php');
require_once('../Modelo/Cotizacion.php');
require_once('../Modelo/CrudCotizacion.php');

$Cotizacion = new Cotizacion();
$CrudCotizacion =new CrudCotizacion();

if (isset($_POST["Crear"])) {

     $Cotizacion->setIdCotizacion(null);
     $Cotizacion->setIdEmpresa($_POST["IdEmpresa"]);
     $Cotizacion->setEstado($_POST["Estado"]);
     $Cotizacion->setMetros_Cubicos($_POST["Metros_Cubicos"]);
     $Cotizacion->setValor_Metro($_POST["Valor_Metro"]);
     $Cotizacion->setIva($_POST["Iva"]);
     $Cotizacion->setValor_Total($_POST["Valor_Total"]);
     $Cotizacion->setObservaciones($_POST["Observaciones"]);

     $CrudCotizacion::InsertarCotizacion($Cotizacion);
}
elseif(isset($_POST["Editar"])) {

     $Cotizacion->setIdCotizacion($_POST["IdCotizacion"]);
     $Cotizacion->setIdEmpresa($_POST["IdEmpresa"]);
     $Cotizacion->setEstado($_POST["Estado"]);
     $Cotizacion->setMetros_Cubicos($_POST["Metros_Cubicos"]);
     $Cotizacion->setValor_Metro($_POST["Valor_Metro"]);
     $Cotizacion->setIva($_POST["Iva"]);
     $Cotizacion->setValor_Total($_POST["Valor_Total"]);
     $Cotizacion->setObservaciones($_POST["Observaciones"]);

     $CrudCotizacion::ModificarCotizacion($Cotizacion);
}
elseif ($_GET['Accion']== "EliminarCotizacion") {
     
     $CrudCotizacion::EliminarCotizacion($_GET["IdCotizacion"]);
}



?>