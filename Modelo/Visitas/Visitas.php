<?php
 class Visitas{
    private $IdVisita;
    private $IdObraR;
    private $TipoVisitaR;
    private $EncargadoVisitaR;
    private $FechaHoraR;
    private $ViabilidadR;
    private $ObservacionesR;


    public function __construct(){}

    public function setIdVisita($IdVisita){
        $this -> IdVisita = $IdVisita;
    }
    public function getIdVisita(){
        return $this-> IdVisita;
    }

    public function setIdObraR($IdObraR){
        $this -> IdObraR = $IdObraR;
    }
    public function getIdObraR(){
        return $this-> IdObraR;
    }

    public function setTipoVisitaR($TipoVisitaR){
        $this -> TipoVisitaR = $TipoVisitaR;
    }
    public function getTipoVisitaR(){
        return $this-> TipoVisitaR;
    }

    public function setEncargadoVisitaR($EncargadoVisitaR){
        $this -> EncargadoVisitaR = $EncargadoVisitaR;
    }
    public function getEncargadoVisitaR(){
        return $this-> EncargadoVisitaR;
    }

    public function setFechaHoraR($FechaHoraR){
        $this -> FechaHoraR = $FechaHoraR;
    }
    public function getFechaHoraR(){
        return $this-> FechaHoraR;
    }

    public function setViabilidadR($ViabilidadR){
        $this -> ViabilidadR = $ViabilidadR;
    }
    public function getViabilidadR(){
        return $this-> ViabilidadR;
    }

    public function setObservacionesR($ObservacionesR){
        $this -> ObservacionesR = $ObservacionesR;
    }
    public function getObservacionesR(){
        return $this-> ObservacionesR;
    }


    


 }
 
//  $Visitas = new Visitas();
//  $Visitas -> setObservacionesR("hola");
//  echo "La observacion es ".$Visitas-> getObservacionesR();

?>