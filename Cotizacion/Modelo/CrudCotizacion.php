<?php

// require_once('../conexion.php');

class CrudCotizacion{

     public function __construct(){
     }

     public function InsertarCotizacion($Cotizacion){
          $Db = Db::Conectar();// conectar a la base de Datos
          //definir la insercion a realizar
          $Insert = $Db->prepare('INSERT INTO cotizacion VALUES(:IdCotizacion,:IdEmpresa,:Estado,:Metros_Cubicos,:Valor_Metro,:Iva,:Valor_Total,:Observaciones)');
          $Insert->bindValue('IdCotizacion', $Cotizacion->getIdCotizacion());
          $Insert->bindValue('IdEmpresa', $Cotizacion->getIdEmpresa());
          $Insert->bindValue('Estado', $Cotizacion->getEstado());
          $Insert->bindValue('Metros_Cubicos', $Cotizacion->getMetros_Cubicos());
          $Insert->bindValue('Valor_Metro', $Cotizacion->getValor_Metro());
          $Insert->bindValue('Iva', $Cotizacion->getIva());
          $Insert->bindValue('Valor_Total', $Cotizacion->getValor_Total());
          $Insert->bindValue('Observaciones', $Cotizacion->getObservaciones());
          try {
               $Insert->execute();//ejecutar el insert
               //Echo " Registro exitoso";
               ?>
               <script>
          //header("location:../../index.php");
               alert("Registro exitoso");
               document.location.href="../Vista/CrearCotizacion.php";
               </script>
               <?php

          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la insercion

               die();
          }

     }

     public function ListarCotizacion(){
          $Db = Db::Conectar();
          $ListaCotizacion = [];
          $Sql = $Db->query('SELECT cotizacion.IdCotizacion, empresa.Empresa, cotizacion.Estado, cotizacion.Metros_Cubicos, cotizacion.Valor_Metro, cotizacion.Iva, cotizacion.Valor_Total, cotizacion.Observaciones FROM cotizacion INNER JOIN empresa ON cotizacion.IdEmpresa=empresa.IdEmpresa ORDER BY IdCotizacion ASC');
          $Sql->execute();

          foreach($Sql->fetchAll() as $Cotizacion){
               $MyCotizacion = new Cotizacion();

               $MyCotizacion->setIdCotizacion($Cotizacion['IdCotizacion']);
               $MyCotizacion->setIdEmpresa($Cotizacion['Empresa']);
               $MyCotizacion->setEstado($Cotizacion['Estado']);
               $MyCotizacion->setMetros_Cubicos($Cotizacion['Metros_Cubicos']);
               $MyCotizacion->setValor_Metro($Cotizacion['Valor_Metro']);
               $MyCotizacion->setIva($Cotizacion['Iva']);
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
               $MyCotizacion->setIdCotizacion($Cotizacion['IdCotizacion']);
               $MyCotizacion->setIdEmpresa($Cotizacion['IdEmpresa']);
               $MyCotizacion->setEstado($Cotizacion['Estado']);
               $MyCotizacion->setMetros_Cubicos($Cotizacion['Metros_Cubicos']);
               $MyCotizacion->setValor_Metro($Cotizacion['Valor_Metro']);
               $MyCotizacion->setIva($Cotizacion['Iva']);
               $MyCotizacion->setValor_Total($Cotizacion['Valor_Total']);
               $MyCotizacion->setObservaciones($Cotizacion['Observaciones']);

          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la modificacion
               die();
          }
          return $MyCotizacion;
     }

     public function ModificarCotizacion($Cotizacion){

          $Db = Db::Conectar();
          $Sql = $Db->prepare('UPDATE cotizacion SET IdEmpresa=:IdEmpresa, Estado=:Estado, Metros_Cubicos=:Metros_Cubicos, Valor_Metro=:Valor_Metro, Iva=:Iva, Valor_Total=:Valor_Total,Observaciones=:Observaciones WHERE IdCotizacion=:IdCotizacion');
          $Sql->bindValue('IdCotizacion', $Cotizacion->getIdCotizacion());
          $Sql->bindValue('IdEmpresa', $Cotizacion->getIdEmpresa());
          $Sql->bindValue('Estado', $Cotizacion->getEstado());
          $Sql->bindValue('Metros_Cubicos', $Cotizacion->getMetros_Cubicos());
          $Sql->bindValue('Valor_Metro', $Cotizacion->getValor_Metro());
          $Sql->bindValue('Iva', $Cotizacion->getIva());
          $Sql->bindValue('Valor_Total', $Cotizacion->getValor_Total());
          $Sql->bindValue('Observaciones', $Cotizacion->getObservaciones());
          try {
               $Sql->execute();//ejecutar el insert
               //Echo " Modificacion exitosa";
               ?>
               <script>
          //header("location:../../index.php");
               alert("Modificacion Exitosa");
               document.location.href="../Vista/ListarCotizacion.php";
               </script>
               <?php
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
               //Echo "Eliminacion exitosa";
               ?>
               <script>
          //header("location:../../index.php");
               alert("Eliminacion exitosa");
               document.location.href="../Vista/ListarCotizacion.php";
               </script>
               <?php
          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la insercion
               die();
          }

     }

}


?>