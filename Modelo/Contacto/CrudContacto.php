<?php
require_once('../conexion.php');
// require_once('Contacto.php');

// include('../conexion.php');
// include('Contacto.php');

class CrudContacto
{
    public function __construct(){}

    public function InsertarContacto($Contacto)
    {
        $Db = Db::Conectar();

        $Insert = $Db->prepare('INSERT INTO cotacto VALUES( :IdContacto,
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
}


?>
