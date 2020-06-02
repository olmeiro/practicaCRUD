<?php

require_once('../Modelo/Cotizacion/Cotizacion.php');
require_once('../Modelo/Cotizacion/CrudCotizacion.php');


$Cotizacion = new Cotizacion();
$CrudCotizacion =new CrudCotizacion();
//echo "Contrilador";

if (isset($_POST{"Crear"})) {

     $Cotizacion->setIdCotizacion(null);
     $Cotizacion->setIdEmpresa($_POST["IdEmpresa"]);
     $Cotizacion->setIdEstado($_POST["IdEstado"]);
     $Cotizacion->setIdEtapa($_POST["IdEtapa"]);
     $Cotizacion->setIdJornada($_POST["IdJornada"]);
     $Cotizacion->setIdModalidad($_POST["IdModalidad"]);
     $Cotizacion->setIdTipo_Concreto($_POST["IdTipo_Concreto"]);
     $Cotizacion->setIva($_POST["Iva"]);
     $Cotizacion->setLozas($_POST["Lozas"]);
     $Cotizacion->setMetros_Cubicos($_POST["Metros_Cubicos"]);
     $Cotizacion->setTuberia($_POST["Tuberia"]);
     $Cotizacion->setValor_Metro($_POST["Valor_Metro"]);
     $Cotizacion->setValor_Total($_POST["Valor_Total"]);
     $Cotizacion->setObservaciones($_POST["Observaciones"]);

     //echo $Cotizacion->getIdEmpresa();

     $CrudCotizacion::InsertarCotizacion($Cotizacion);




}


?>