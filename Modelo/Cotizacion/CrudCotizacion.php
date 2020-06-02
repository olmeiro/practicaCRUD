<?php

require_once('../conexion.php');


class CrudCotizacion{

     public function __construct(){
     }

     public function InsertarCotizacion($Cotizacion){
          $Db = Db::Conectar();// conectar a la base de Datos
          //definir la insercion a realizar
          $Insert = $Db->prepare('INSERT INTO cotizacion VALUES(:IdCotizacion,:IdEmpresa,:IdEstado,:IdEtapa,:IdJornada,:IdModalidad,:IdTipo_Concreto,:Iva,:Lozas,:Metros_Cubicos,:Tuberia,:Valor_Metro,:Valor_Total,:Observaciones)');
          $Insert->bindValue('IdCotizacion', $Cotizacion->getIdCotizacion());
          $Insert->bindValue('IdEmpresa', $Cotizacion->getIdEmpresa());
          $Insert->bindValue('IdEstado', $Cotizacion->getIdEstado());
          $Insert->bindValue('IdEtapa', $Cotizacion->getIdEtapa());
          $Insert->bindValue('IdJornada', $Cotizacion->getIdJornada());
          $Insert->bindValue('IdModalidad', $Cotizacion->getIdModalidad());
          $Insert->bindValue('IdTipo_Concreto', $Cotizacion->getIdTipo_Concreto());
          $Insert->bindValue('Iva', $Cotizacion->getIva());
          $Insert->bindValue('Lozas', $Cotizacion->getLozas());
          $Insert->bindValue('Metros_Cubicos', $Cotizacion->getMetros_Cubicos());
          $Insert->bindValue('Tuberia', $Cotizacion->getTuberia());
          $Insert->bindValue('Valor_Metro', $Cotizacion->getValor_Metro());
          $Insert->bindValue('Valor_Total', $Cotizacion->getValor_Total());
          $Insert->bindValue('Observaciones', $Cotizacion->getObservaciones());
          try {
               $Insert->execute();//ejecutar el insert
               Echo " Registro exitoso";
               
          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la insercion
               
               die();
          }

     }


}

?>