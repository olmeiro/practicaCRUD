<?php

require_once('../conexion.php');

class CrudVisitas{

    public function __construct(){}

    public function InsertarVisita($Visitas){
        $Db= Db::Conectar();

        $Insert = $Db->prepare('INSERT INTO visitas VALUES (:IdVisita, :IdObraR, :TipoVisitaR, :EncargadoVisitaR, :FechaHoraR, :ViabilidadR, :ObservacionesR)');
        $Insert->bindValue('IdVisita', $Visitas ->getIdVisita());

        $Insert->bindValue('IdObraR' , $Visitas->getIdObraR());

        $Insert->bindValue('TipoVisitaR' , $Visitas ->getTipoVisitaR());

        $Insert->bindValue('EncargadoVisitaR' , $Visitas ->getEncargadoVisitaR());

        $Insert->bindValue('FechaHoraR' , $Visitas ->getFechaHoraR());

        $Insert->bindValue('ViabilidadR' , $Visitas ->getViabilidadR());

        $Insert->bindValue('ObservacionesR' , $Visitas ->getObservacionesR());

        try {
            $Insert->execute();//ejecutar el insert
            Echo " Registro exitoso";
            
       } catch (Exception $e) {
            echo $e->getMessage();//Mostrar errores en la insercion
            
            die();
       }



    }










}

?>