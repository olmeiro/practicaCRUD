<?php

class Cotizacion{

     // Parametros de ENTRADA
     private $IdCotizacion;
     private $IdEmpresa;
     private $Estado;
     private $Metros_Cubicos;
     private $Valor_Metro;
     private $Iva;
     private $Valor_Total;
     private $Observaciones;

     // Definicion CONSTRUCTOR

     public function __construct(){}

     // definir los metodos SET y GET para  caa  atributo de  la clase
     public function setIdCotizacion($IdCotizacion){
          $this->IdCotizacion = $IdCotizacion;
     }
     public function getIdCotizacion(){
          return $this->IdCotizacion;
     }
     public function setIdEmpresa($IdEmpresa){
          $this->IdEmpresa = $IdEmpresa;
     }
     public function getIdEmpresa(){
          return $this->IdEmpresa;
     }
     public function setEstado($Estado){
          $this->Estado = $Estado;
     }
     public function getEstado(){
          return $this->Estado;
     }
     public function setMetros_Cubicos($Metros_Cubicos){
          $this->Metros_Cubicos = $Metros_Cubicos;
     }
     public function getMetros_Cubicos(){
          return $this->Metros_Cubicos;
     }
     public function setValor_Metro($Valor_Metro){
          $this->Valor_Metro = $Valor_Metro;
     }
     public function getValor_Metro(){
          return $this->Valor_Metro;
     }
     public function setIva($Iva){
          $this->Iva = $Iva;
     }
     public function getIva(){
          return $this->Iva;
     }
     public function setValor_Total($Valor_Total){
          $this->Valor_Total = $Valor_Total;
     }
     public function getValor_Total(){
          return $this->Valor_Total;
     }
     public function setObservaciones($Observaciones){
          $this->Observaciones = $Observaciones;
     }
     public function getObservaciones(){
          return $this->Observaciones;
     }
}

// //Testear Funcionalidad de clase.section-1
// $Cotizacion = new Cotizacion();
// $Cotizacion->setIdCotizacion(1);
// $Cotizacion->setIdEmpresa(1);
// $Cotizacion->setEstado(1);
// $Cotizacion->setMetros_Cubicos(10);
// $Cotizacion->setValor_Metro(10000);
// $Cotizacion->setIva(19);
// $Cotizacion->setValor_Total(100000);
// $Cotizacion->setObservaciones("Muy mal trabajo");

// echo "Cotizacion : " .$Cotizacion->getIdCotizacion();
// echo "<br>";
// echo "Empresa : " .$Cotizacion->getIdEmpresa();
// echo "<br>";
// echo "Estado : " .$Cotizacion->getEstado();
// echo "<br>";
// echo "Metros Cubicos : " .$Cotizacion->getMetros_Cubicos();
// echo "<br>";
// echo "Valor Metro : " .$Cotizacion->getValor_Metro();
// echo "<br>";
// echo "Iva : " .$Cotizacion->getIva();
// echo "<br>";
// echo "Valor Total : " .$Cotizacion->getValor_Total();
// echo "<br>";
// echo "Observaciones : " .$Cotizacion->getObservaciones();
// echo "<br>";


?>