<?php

require_once('../../conexion.php');

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


    public function ListarMaquinaria(){

        $Db = Db::Conectar();
            $ListaMaquinaria = [];
            $Sql = $Db->query('SELECT * FROM maquinaria');
            $Sql->execute();
            foreach($Sql->fetchAll() as $Maquinaria){
                $MyMaquinaria = new Maquinaria();
                $MyMaquinaria->setIdMaquinaria($Maquinaria['IdMaquinaria']);
                $MyMaquinaria->setnombreobra($Maquinaria['nombreobra']);
                $MyMaquinaria->setdirectorobra($Maquinaria['directorobra']);
                $MyMaquinaria->setconstructora($Maquinaria['constructora']);
                $MyMaquinaria->setmes($Maquinaria['mes']);
                $MyMaquinaria->setmaquina($Maquinaria['maquina']);
                $MyMaquinaria->setoperario1($Maquinaria['operario1']);
                $MyMaquinaria->setoperario2($Maquinaria['operario2']);
                $ListaMaquinaria[] = $MyMaquinaria;
            }
            return $ListaMaquinaria;

    }

    public function ObtenerMaquinaria($IdMaquinaria){
                $Db = Db::Conectar();
                //$Sql = $Db->prepare('SELECT * FROM competencia WHERE CodigoCompetencia=:CodigoCompetencia AND NombreCompetencia');
                $Sql = $Db->prepare('SELECT * FROM maquinaria WHERE IdMaquinaria=:IdMaquinaria');
                $Sql->bindValue('IdMaquinaria',$IdMaquinaria);
                $MyMaquinaria = new Maquinaria();
                try{
                    $Sql->execute(); //Ejecutar el update
                    $Maquinaria = $Sql->fetch(); //Se almacena la variable $competencia los datos de la variabale $sql
                    $MyMaquinaria->setIdMaquinaria($Maquinaria['IdMaquinaria']);
                    $MyMaquinaria->setnombreobra($Maquinaria['nombreobra']);
                    $MyMaquinaria->setdirectorobra($Maquinaria['directorobra']);
                    $MyMaquinaria->setconstructora($Maquinaria['constructora']);
                    $MyMaquinaria->setmes($Maquinaria['mes']);
                    $MyMaquinaria->setmaquina($Maquinaria['maquina']);
                    $MyMaquinaria->setoperario1($Maquinaria['operario1']);
                    $MyMaquinaria->setoperario2($Maquinaria['operario2']);

                }
                catch(Exception $e){ //Capturar Errores
                    echo $e->getMessage(); //Mostrar errores en la modificacion
                    die();
                }
                return $MyMaquinaria;
            }


            public function ModificarMaquinaria($Maquinaria)
            {
                $Db = Db::Conectar(); //Conectar a la base de datos
                $Sql = $Db->prepare('UPDATE maquinaria SET IdMaquinaria=:IdMaquinaria, nombreobra=:nombreobra,
                directorobra=:directorobra, constructora=:constructora, constructora=:constructora, mes=:mes,
                maquina=:maquina, operario1=:operario1, operario2=:operario2 WHERE IdMaquinaria=:IdMaquinaria');
                $Sql->bindValue('CodigoCompetencia',$Competencia->getCodigoCompetencia());
                $Sql->bindValue('NombreCompetencia',$Competencia->getNombreCompetencia());
                try{
                    $Sql->execute(); //Ejecutar el slq que contiene un update
                    echo "Modificacion exitosa";
                }
                catch(Exception $e){ //Capturar Errores
                    echo $e->getMessage(); //Mostrar errores en la modificaion
                    die();
                }
            }

            public function EliminarCompetencia($CodigoCompetencia)
            {
                $Db = Db::Conectar(); //Conectar a la base de datos
                $Sql = $Db->prepare('DELETE FROM maquinaria WHERE IdMaquinaria=:IdMaquinaria');
                $Sql->bindValue('IdMaquinaria',$IdMaquinaria);
                try{
                    $Sql->execute(); //Ejecutar el slq que contiene un update
                    echo "Eliminacion exitosa";
                }
                catch(Exception $e){ //Capturar Errores
                    echo $e->getMessage(); //Mostrar errores en la modificaion
                    die();
                }
            }









}
?>