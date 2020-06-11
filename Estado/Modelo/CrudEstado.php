<?php
require_once('../../conexion.php');
require_once('estado.php');

$Estado = new Estado();

class CrudEstado
{
    public function __construct(){}

    public function InsertarEstado($Estado)
    {
        $Db = Db::Conectar();

        $Insert = $Db->prepare('INSERT INTO estado VALUES( :IdEstado, :Estado)');

        $Insert->bindValue('IdEstado', $Estado->getIdEstado());
        $Insert->bindValue('Estado', $Estado->getEstado());
        try
        {
          $Insert->execute();//ejecutar el INSERT
          //echo "Registro exitoso";
          ?>
          <script>
            alert("Registro de estado éxitoso");
            document.location.href = "../Vista/listarEstado.php";
          </script>
          <?php

        }
        catch(Exception $e)
        {
          echo $e->getMessage();//Mostrar errores en la insercion.
          die();
        }
    }

    public function ObtenerEstado($IdEstado)
    {
      //Código para obtener una competencia:
      $Db = Db::Conectar();
      $Sql = $Db->prepare('SELECT * FROM  estado WHERE IdEstado =:IdEstado'); //aca agrego mas campo si quiero buscar por mas campos luego el bind value
      $Sql->bindValue('IdEstado',$IdEstado); //evita la inyeccion SQL
      $MyEstado = new Estado();
      try
      {
        $Sql -> execute();//ejecutar el SELEC
        $Estado = $Sql -> fetch();//se lleva el array obtenido en $Estado luego de realizar el sql
        $MyEstado->setIdEstado($Estado['IdEstado']);
        $MyEstado->setEstado($Estado['Estado']);

        //echo "Registro exitoso";
      }
      catch(Exception $e)
      {
        echo $e->getMessage();//Mostrar errores en la MODIFICACION.
        die();
      }
      return $MyEstado;
    }

    public function listarEstado()
    {
      $Db = Db::Conectar();
      $listaEstados = [];
      $Sql = $Db->query('SELECT * FROM estado');
      $Sql->execute();
      foreach($Sql->fetchAll() as $Estado)
      {
        $MiEstado = new Estado();
        $MiEstado->setIdEstado($Estado['IdEstado']);
        $MiEstado->setEstado($Estado['Estado']);

        $listaEstados[] = $MiEstado;
      }
      return $listaEstados;
    }

    public function ModificarEstado($IdEstado) //Se recibe objeto Competencia
    {
        $Db = Db::Conectar(); //Conectar a BBDD revisar conexion
        //Definir la insercion a realizar.
        $Sql = $Db->prepare('UPDATE estado SET  Estado=:Estado WHERE IdEstado=:IdEstado');//para usar bindvalue para evitar sqlInjection
      
        $Sql->bindValue('IdEstado', $Estado->getIdEstado() );
        $Sql->bindValue('Estado', $Estado->getEstado());
        
        try
        {
          $Sql->execute();//ejecutar el UPDATE
          //echo "Modificación exitosa";

          ?>
          <script>
            alert("Modificación éxitosa de Estado");
            document.location.href = "../Vista/listarEstado.php";
          </script>
          <?php
        }
        catch(Exception $e)
        {
          echo $e->getMessage();//Mostrar errores en la insercion.
          die();
        }
    }

    public function EliminarEstado($IdEstado) //Se recibe objeto Competencia
    {
        $Db = Db::Conectar(); //Conectar a BBDD revisar conexion
        //Definir la insercion a realizar.
        $Sql = $Db->prepare('DELETE FROM estado WHERE IdEstado=:IdEstado');//para usar bindvalue para evitar sqlInjection
        $Sql->bindValue('IdEstado',$IdEstado);
        try
        {
          $Sql->execute();//ejecutar el DELETE
          ?>
          <script>
            alert("Eliminación éxitosa!!!");
            document.location.href = "../Vista/ListarEstado.php";
          </script>
          <?php

        }
        catch(Exception $e)
        {
          echo $e->getMessage();//Mostrar errores en la insercion.
          die();
        }
    }
}


?>
