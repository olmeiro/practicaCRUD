<?php

require_once('../../conexion.php');


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

     public function ListarCotizacion(){
          $Db = Db::Conectar();
          $ListaCotizacion = [];
          $Sql = $Db->query('SELECT * FROM cotizacion');
          $Sql->execute();

          foreach($Sql->fetchAll() as $Cotizacion){
               $MyCotizacion = new Cotizacion();

               $MyCotizacion->setIdCotizacion($Cotizacion['IdCotizacion']);
               $MyCotizacion->setIdEmpresa($Cotizacion['IdEmpresa']);
               $MyCotizacion->setIdEstado($Cotizacion['IdEstado']);
               $MyCotizacion->setIdEtapa($Cotizacion['IdEtapa']);
               $MyCotizacion->setIdJornada($Cotizacion['IdJornada']);
               $MyCotizacion->setIdModalidad($Cotizacion['IdModalidad']);
               $MyCotizacion->setIdTipo_Concreto($Cotizacion['IdTipo_Concreto']);
               $MyCotizacion->setIva($Cotizacion['Iva']);
               $MyCotizacion->setLozas($Cotizacion['Lozas']);
               $MyCotizacion->setMetros_Cubicos($Cotizacion['Metros_Cubicos']);
               $MyCotizacion->setTuberia($Cotizacion['Tuberia']);
               $MyCotizacion->setValor_Metro($Cotizacion['Valor_Metro']);
               $MyCotizacion->setValor_Total($Cotizacion['Valor_Total']);
               $MyCotizacion->setObservaciones($Cotizacion['Observaciones']);

               $ListaCotizacion[]=$MyCotizacion;
          }
          return $ListaCotizacion;
     }

     public function ObtenerCotizacion($IdCotizacion){
          $Db = Db::Conectar();
          $Sql = $Db->prepare('SELECT * FROM cotizacion WHERE IdCotizacion=:IdCotizacion');
          $Sql->bindValue('IdCotizacion',$IdCotizacion);
          $MyCotizacion = new Cotizacion();

          try {
               $Sql->execute();
               $Cotizacion = $Sql->fetch();
               $MyCotizacion->setIdEmpresa($Cotizacion['IdEmpresa']);
               $MyCotizacion->setIdEstado($Cotizacion['IdEstado']);
               $MyCotizacion->setIdEtapa($Cotizacion['IdEtapa']);
               $MyCotizacion->setIdJornada($Cotizacion['IdJornada']);
               $MyCotizacion->setIdModalidad($Cotizacion['IdModalidad']);
               $MyCotizacion->setIdTipo_Concreto($Cotizacion['IdTipo_Concreto']);
               $MyCotizacion->setIva($Cotizacion['Iva']);
               $MyCotizacion->setLozas($Cotizacion['Lozas']);
               $MyCotizacion->setMetros_Cubicos($Cotizacion['Metros_Cubicos']);
               $MyCotizacion->setTuberia($Cotizacion['Tuberia']);
               $MyCotizacion->setValor_Metro($Cotizacion['Valor_Metro']);
               $MyCotizacion->setValor_Total($Cotizacion['Valor_Total']);
               $MyCotizacion->setObservaciones($Cotizacion['Observaciones']);


          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la modificacion
               die();
          }
          return $MyCotizacion;

     }

     public function ModificarCotizacion($IdCotizacion){

          $Db = Db::Conectar();
          $Sql = $Db->prepare('UPDATE cotizacion SET IdEmpresa=:IdEmpresa, IdEstado=:IdEstado, IdEtapa=:IdEtapa, IdJornada=:IdJornada, IdModalidad=:IdModalidad, IdTipo_Concreto=:IdTipo_Concreto, Iva=:Iva, Lozas=:Lozas, Metros_Cubicos=:Metros_Cubicos, Tuberia=:Tuberia, Valor_Metro=:Valor_Metro, Valor_Total=:Valor_Total,Observaciones=:Observaciones WHERE IdCotizacion=:IdCotizacion');
          $Sql->bindValue('IdEmpresa', $Cotizacion->getIdEmpresa());
          $Sql->bindValue('IdEstado', $Cotizacion->getIdEstado());
          $Sql->bindValue('IdEtapa', $Cotizacion->getIdEtapa());
          $Sql->bindValue('IdJornada', $Cotizacion->getIdJornada());
          $Sql->bindValue('IdModalidad', $Cotizacion->getIdModalidad());
          $Sql->bindValue('IdTipo_Concreto', $Cotizacion->getIdTipo_Concreto());
          $Sql->bindValue('Iva', $Cotizacion->getIva());
          $Sql->bindValue('Lozas', $Cotizacion->getLozas());
          $Sql->bindValue('Metros_Cubicos', $Cotizacion->getMetros_Cubicos());
          $Sql->bindValue('Tuberia', $Cotizacion->getTuberia());
          $Sql->bindValue('Valor_Metro', $Cotizacion->getValor_Metro());
          $Sql->bindValue('Valor_Total', $Cotizacion->getValor_Total());
          $Sql->bindValue('Observaciones', $Cotizacion->getObservaciones());
          try {
               $Sql->execute();//ejecutar el insert
               Echo " Modificacion exitosa";
          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la insercion
               die();
          }
     }

     public function EliminarCotizacion($IdCotizacion){
          $Db = Db::Conectar();
          $Sql = $Db->prepare('DELETE FROM cotizacion WHERE IdCotizacion=:IdCotizacion');
          $Sql->bindValue('IdCotizacion',$IdCotizacion);

          try {
               $Sql->execute();//ejecutar el insert
               Echo "Eliminacion exitosa";
          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la insercion
               die();
          }

     }


}

?>