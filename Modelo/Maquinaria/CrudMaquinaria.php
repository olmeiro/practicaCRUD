<?php

require_once('../conexion.php');

class CrudMaquinaria{

    public function __construct(){
    }

    public function InsertarMaquinaria($Maquinaria){

        $Db = Db::Conectar();

        $Insert = $Db->prepare('INSERT INTO maquinaria VALUES(:idmaquinaria,:nombreempresa,:directorobra,:constructora,:mes,:maquina,:operario1,:operario2)');
        $Insert->bindValue('idmaquinaria',$Maquinaria->getidmaquinaria());
        $Insert->bindValue('nombreempresa',$Maquinaria->getnombreempresa());
        $Insert->bindValue('directorobra',$Maquinaria->getdirectorobra());
        $Insert->bindValue('constructora',$Maquinaria->getconstructora());
        $Insert->bindValue('mes',$Maquinaria->getmes());
        $Insert->bindValue('maquina',$Maquinaria->getmaquina());
        $Insert->bindValue('operario1',$Maquinaria->getoperario1());
        $Insert->bindValue('operario2',$Maquinaria->getoperario2());

        try{
            $Insert->execute();//ejecutar el insert
                Echo " Registro exitoso";

            } catch (Exception $e)
            {
                echo $e->getMessage();//Mostrar errores en la insercion

                die();
            }
    }
}
?>