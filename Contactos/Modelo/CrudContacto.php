<?php
require_once('../../conexion.php');
require_once('Contacto.php');

$Contacto = new Contacto();

class CrudContacto
{
    public function __construct(){}

    public function InsertarContacto($Contacto)
    {
        $Db = Db::Conectar();

        $Insert = $Db->prepare('INSERT INTO contacto VALUES( :IdContacto,
                                                            :Nombre,
                                                            :Apellido_1,
                                                            :Apellido_2,
                                                            :Documento,
                                                            :Estado,
                                                            :IdCorreo,
                                                            :IdTelefono,
                                                            :Cargo)');

        $Insert->bindValue('IdContacto', $Contacto->getIdContacto());
        $Insert->bindValue('Nombre', $Contacto->getNombre());
        $Insert->bindValue('Apellido_1', $Contacto->getApellido_1());
        $Insert->bindValue('Apellido_2', $Contacto->getApellido_2());
        $Insert->bindValue('Documento', $Contacto->getDocumento());
        $Insert->bindValue('Estado', $Contacto->getEstado());
        $Insert->bindValue('IdCorreo', $Contacto->getCorreo());
        $Insert->bindValue('IdTelefono', $Contacto->getTelefono());
        $Insert->bindValue('Cargo', $Contacto->getCargo());

        try
        {
          $Insert->execute();//ejecutar el INSERT
          echo "Registro exitoso";
        }
        catch(Exception $e)
        {
          echo $e->getMessage();//Mostrar errores en la insercion.
          die();
        }
    }

    public function ObtenerContacto($Documento)
    {
      //Código para obtener una competencia:
      $Db = Db::Conectar();
      $Sql = $Db->prepare('SELECT * FROM  contacto WHERE Documento =:Documento'); //aca agrego mas campo si quiero buscar por mas campos luego el bind value
      $Sql->bindValue('Documento',$Documento); //evita la inyeccion SQL
      $MyContacto = new Contacto();
      try
      {
        $Sql -> execute();//ejecutar el SELEC
        $Contacto = $Sql -> fetch();//se lleva el array obtenido en $Compentencia luego de realizar el sql
        $MyContacto->setIdContacto($Contacto['IdContacto']);
        $MyContacto->setNombre($Contacto['Nombre']);
        $MyContacto->setApellido_1($Contacto['Apellido_1']);
        $MyContacto->setApellido_2($Contacto['Apellido_2']);
        $MyContacto->setDocumento($Contacto['Documento']);
        $MyContacto->setEstado($Contacto['Estado']);
        $MyContacto->setCorreo($Contacto['IdCorreo']);
        $MyContacto->setTelefono($Contacto['IdTelefono']);
        $MyContacto->setCargo($Contacto['Cargo']);

        //echo "Registro exitoso";
      }
      catch(Exception $e)
      {
        echo $e->getMessage();//Mostrar errores en la MODIFICACION.
        die();
      }
      return $MyContacto;
    }

    public function listarContactos()
    {
      $Db = Db::Conectar();
      $listaContactos = [];
      $Sql = $Db->query('SELECT * FROM contacto');
      $Sql->execute();
      foreach($Sql->fetchAll() as $Contacto)
      {
        $MiContacto = new Contacto();
        $MiContacto->setIdContacto($Contacto['IdContacto']);
        $MiContacto->setNombre($Contacto['Nombre']);
        $MiContacto->setApellido_1($Contacto['Apellido_1']);
        $MiContacto->setApellido_2($Contacto['Apellido_2']);
        $MiContacto->setDocumento($Contacto['Documento']);
        $MiContacto->setEstado($Contacto['Estado']);
        $MiContacto->setCorreo($Contacto['IdCorreo']);
        $MiContacto->setTelefono($Contacto['IdTelefono']);
        $MiContacto->setCargo($Contacto['Cargo']);

        $listaContactos[] = $MiContacto;
      }
      return $listaContactos;
    }

    public function ModificarContacto($Contacto) //Se recibe objeto Competencia
    {
        $Db = Db::Conectar(); //Conectar a BBDD revisar conexion
        //Definir la insercion a realizar.
        $Sql = $Db->prepare('UPDATE contacto SET IdContacto=:IdContacto,
                                                 Nombre=:Nombre,
                                                 Apellido_1=:Apellido_1,
                                                 Apellido_2=:Apellido_2,
                                                 Documento=:Documento,
                                                 Estado=:Estado,
                                                 IdCorreo=:Correo,
                                                 IdTelefono=:Telefono,
                                                 Cargo=:Cargo,
                                                 WHERE Documento=:Documento');//para usar bindvalue para evitar sqlInjection

        $Sql->bindValue('IdContacto', $Contacto->getIdContacto());
        $Sql->bindValue('Nombre', $Contacto->getNombre());
        $Sql->bindValue('Apellido_1', $Contacto->getApellido_1());
        $Sql->bindValue('Apellido_2', $Contacto->getApellido_2());
        $Sql->bindValue('Documento', $Contacto->getDocumento());
        $Sql->bindValue('Estado', $Contacto->getEstado());
        $Sql->bindValue('IdCorreo', $Contacto->getCorreo());
        $Sql->bindValue('IdTelefono', $Contacto->getTelefono());
        $Sql->bindValue('Cargo', $Contacto->getCargo());
       

        try
        {
          $Sql->execute();//ejecutar el UPDATE
          echo "Modificación exitosa";

          ?>
          <script>
            alert("Modificación éxitosa");
            document.location.href = "../Vista/listarContacto.php";
          </script>
          <?php
        }
        catch(Exception $e)
        {
          echo $e->getMessage();//Mostrar errores en la insercion.
          die();
        }
    }




    public function EliminarContacto($Documento) //Se recibe objeto Competencia
    {
        $Db = Db::Conectar(); //Conectar a BBDD revisar conexion
        //Definir la insercion a realizar.
        $Sql = $Db->prepare('DELETE FROM contacto WHERE Documento=:Documento');//para usar bindvalue para evitar sqlInjection
        $Sql->bindValue('Documento',$Documento);
        try
        {
          $Sql->execute();//ejecutar el DELETE
          ?>
          <script>
            alert("Eliminación éxitosa!!!");
            document.location.href = "../Vista/ListarContacto.php";
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
