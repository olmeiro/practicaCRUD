<?php

class Maquinaria {

    private $idmaquinaria;
    private $nombreempresa;
    private $directorobra;
    private $constructora;
    private $mes;
    private $maquina;
    private $operario1;
    private $operario2;

    public function __construct(){
    }

        public function setidmaquinaria($idmaquinaria){
            $this->idmaquinaria = $idmaquinaria;
        }
        public function getidmaquinaria(){
            return $this->idmaquinaria;
        }
        

        public function setnombreempresa($nombreempresa){
            $this->nombreempresa = $nombreempresa;
        }
        public function getnombreempresa(){
            return $this->nombreempresa;
        }

        public function setdirectorobra($directorobra){
            $this->directorobra = $directorobra;
        }
        public function getdirectorobra(){
            return $this->directorobra;
        }

        public function setconstructora($constructora){
            $this->constructora = $constructora;
        }
        public function getconstructora(){
            return $this->constructora;
        }

        public function setmes($mes){
            $this->mes = $mes;
        }
        public function getmes(){
            return $this->mes;
        }

        public function setmaquina($maquina){
            $this->maquina = $maquina;
        }
        public function getmaquina(){
            return $this->maquina;
        }

        public function setoperario1($operario1){
            $this->operario1 = $operario1;
        }
        public function getoperario1(){
            return $this->operario1;
        }

        public function setoperario2($operario2){
            $this->operario2 = $operario2;
        }
        public function getoperario2(){
            return $this->operario2;
        }
    }

?>