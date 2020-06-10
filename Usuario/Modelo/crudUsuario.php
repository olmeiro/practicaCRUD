<?php
    require_once ("../../conexion.php");

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

        public function ValidarAcceso($Usuario)
        {
        $Db = Db::Conectar();
        $Sql = $Db->prepare('SELECT * FROM usuario WHERE Nombre =:Nombre AND Clave =:Clave AND Estado=1 ');
        $Sql->bindValue('Nombre', $Usuario->getNombre());
        $Sql->bindValue('Clave', $Usuario->getClave());

        $Sql->execute(); //Ejecutar la consulta, execute() es de la libreria PDO,

        $MiUsuario = new Usuario();
        $MiUsuario->setExiste(0);

        if($Sql->rowCount() > 0) //Arroja el numero de registros arrojados por la consulta:
        {
            $DatosUsuario = $Sql->fetch(); //fetch : función para almancenar los datos arrojados por la consulta

            $MiUsuario->setIdUsuario($DatosUsuario['IdUsuario']);
            $MiUsuario->setNombre($DatosUsuario['Nombre']);
            $MiUsuario->setTipoUsuario($DatosUsuario['TipoUsuario']);
            $MiUsuario->setExiste(1); //Asignar al atributo
        }

        return $MiUsuario;
        }
  
    }
?>