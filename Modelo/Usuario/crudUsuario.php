<?php
    require_once ("../conexion.php");

    class crudUsuario{
        public function __construct(){}

        public function InsertarUsuario($usuario){
            $Db=Db::Conectar();
            $Insert=$Db->prepare('INSERT INTO usuario VALUES(:IdUsuario, :Nombre, :Clave, :TipoUsuario, :Estado)');
            $Insert->bindValue('IdUsuario',$usuario->getIdUsuario());
            $Insert->bindValue('Nombre',$usuario->getNombre());
            $Insert->bindValue('Clave',$usuario->getClave());
            $Insert->bindValue('TipoUsuario',$usuario->getTipoUsuario());
            $Insert->bindValue('Estado',$usuario->getEstado());

            try {
                $Insert->execute();//ejecutar el insert
                Echo "Registro exitoso";
            } catch (Exception $e) {
                echo $e->getMessage();//Mostrar errores en la insercion
                die();
            }
        }
    }
?>