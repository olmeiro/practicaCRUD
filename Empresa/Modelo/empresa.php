<?php

class Empresa{

     // Parametros de ENTRADA
     private $IdEmpresa;
     private $Empresa;
     private $Ciudad;
     private $Direccion;

     public function __construct(){}

     public function setIdEmpresa($IdEmpresa){
          $this->IdEmpresa = $IdEmpresa;
     }

     public function getIdEmpresa(){
          return $this->IdEmpresa;
     }

     public function setEmpresa($Empresa){
          $this->Empresa = $Empresa;
     }

     public function getEmpresa(){
          return $this->Empresa;
     }

     public function setCiudad($Ciudad){
          $this->Ciudad = $Ciudad;
     }

     public function getCiudad(){
          return $this->Ciudad;
     }

     public function setDireccion($Direccion){
          $this->Direccion = $Direccion;
     }

     public function getDireccion() {
          return $this->Direccion;
     }

}

     // $Empresa = new Empresa();
     // $Empresa->setIdEmpresa(1);
     // $Empresa->setEmpresa("maximo construciones");
     // $Empresa->setCiudad("Copacabana");
     // $Empresa->setDireccion("Calle 54  N| 34");

     // echo "Id Empresa n°: " .$Empresa->getIdEmpresa();
     // echo "<br>";
     // echo "Empresa : " .$Empresa->getEmpresa();
     // echo "<br>";
     // echo "Ciudad : " .$Empresa->getCiudad();
     // echo "<br>";
     // echo "Direccion : " .$Empresa->getDireccion();
     // echo "<br>";

?>