<?php

class CrudEmpresa{

     public function __construct(){}

     public function InsertarEmpresa($Empresa){
          $Db = Db::Conectar();

          $Insert = $Db->prepare('INSERT INTO empresa VALUES(:IdEmpresa,:Empresa,:Ciudad,:Direccion)');
          $Insert->bindValue('IdEmpresa', $Empresa->getIdEmpresa());
          $Insert->bindValue('Empresa', $Empresa->getEmpresa());
          $Insert->bindValue('Ciudad' ,$Empresa->getCiudad());
          $Insert->bindValue('Direccion' ,$Empresa->getDireccion());
          try {
               $Insert->execute();//ejecutar el insert
               ?>
               <script>
               alert("Registro exitoso");
               document.location.href="../Vista/CrearEmpresa.php";
               </script>
               <?php
          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la insercion
               die();
          }
     }

     public function ListarEmpresa(){
          $Db = Db::Conectar();
          $ListaEmpresa = [];
          $Sql = $Db->query('SELECT * FROM empresa');
          $Sql->execute();

          foreach($Sql->fetchAll() as $Empresa){
               $MyEmpresa = new Empresa();

               $MyEmpresa->setIdEmpresa($Empresa['IdEmpresa']);
               $MyEmpresa->setEmpresa($Empresa['Empresa']);
               $MyEmpresa->setCiudad($Empresa['Ciudad']);
               $MyEmpresa->setDireccion($Empresa['Direccion']);

               $ListaEmpresa[]=$MyEmpresa;
          }
          return $ListaEmpresa;
     }

     public function ObtenerEmpresa($IdEmpresa){
          $Db = Db::Conectar();
          $Sql = $Db->prepare('SELECT * FROM empresa WHERE IdEmpresa=:IdEmpresa');
          $Sql->bindValue('IdEmpresa',$IdEmpresa);
          $MyEmpresa = new Empresa();

          try {
               $Sql->execute();
               $Empresa = $Sql->fetch();
               $MyEmpresa->setIdEmpresa($Empresa['IdEmpresa']);
               $MyEmpresa->setEmpresa($Empresa['Empresa']);
               $MyEmpresa->setCiudad($Empresa['Ciudad']);
               $MyEmpresa->setDireccion($Empresa['Direccion']);

          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la modificacion
               die();
          }
          return $MyEmpresa;

     }

     public function ModificarEmpresa($Empresa){
          $Db = Db::Conectar();
          $Sql = $Db->prepare('UPDATE empresa SET Empresa=:Empresa, Ciudad=:Ciudad, Direccion=:Direccion WHERE IdEmpresa=:IdEmpresa');
          $Sql->bindValue('IdEmpresa', $Empresa->getIdEmpresa());
          $Sql->bindValue('Empresa', $Empresa->getEmpresa());
          $Sql->bindValue('Ciudad', $Empresa->getCiudad());
          $Sql->bindValue('Direccion', $Empresa->getDireccion());

          try {
               $Sql->execute();//ejecutar el insert
               ?>
               <script>
               alert("Modificacion Exitosa");
               document.location.href="../Vista/ListarEmpresa.php";
               </script>
               <?php
          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la insercion
               die();
          }
     }

     public function EliminarEmpresa($IdEmpresa){
          $Db = Db::Conectar();
          $Sql = $Db->prepare('DELETE FROM empresa WHERE IdEmpresa=:IdEmpresa');
          $Sql->bindValue('IdEmpresa',$IdEmpresa);

          try {
               $Sql->execute();//ejecutar el insert
               ?>
               <script>
               alert("Eliminacion exitosa");
               document.location.href="../Vista/ListarEmpresa.php";
               </script>
               <?php
          } catch (Exception $e) {
               //echo $e->getMessage();//Mostrar errores en la insercion
               ?>
               <script>
               alert("No se puede elimitar la empresa, esta  esta  siendo utilizada en una  o mas cotizaciones");
               document.location.href="../Vista/ListarEmpresa.php";
               </script>
               <?php
               die();
          }

     }
}

?>