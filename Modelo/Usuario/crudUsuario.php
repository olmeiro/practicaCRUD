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

        public function validarIngreso($usuario){
            $Db = Db::Conectar();
            $ListaUsuario=[];
            $Sql = $Db->query('SELECT nombre, clave FROM usuario');
            $Sql->execute();

            foreach ($Sql->fetchAll() as $usuario){
            $myUsuario = new usuario();
            //echo $Competencia['CodigoCompetencia']."----".$Competencia['NombreCompetencia'];
            $myUsuario->setNombre($usuario['Nombre']);
            $myUsuario->setClave($usuario['Clave']);
            $ListaUsuario[]=$myUsuario;
            }
            return $ListaUsuario;
        }
    }
?>