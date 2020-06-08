<?php

class Cotizacion{

     // Parametros de ENTRADA
     private $IdCotizacion;
     private $IdEmpresa;
     private $IdEstado;
     private $IdEtapa;
     private $IdJornada;
     private $IdModalidad;
     private $IdTipo_Concreto;
     private $Iva;
     private $Lozas;
     private $Metros_Cubicos;
     Private $Tuberia;
     private $Valor_Metro;
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
     public function setIdEstado($IdEstado){
          $this->IdEstado = $IdEstado;
     }
     public function getIdEstado(){
          return $this->IdEstado;
     }
     public function setIdEtapa ($IdEtapa){
          $this->IdEtapa = $IdEtapa;
     }
     public function getIdEtapa(){
          return $this->IdEtapa;
     }
     public function setIdJornada ($IdJornada){
          $this->IdJornada = $IdJornada;
     }
     public function getIdJornada(){
          return $this->IdJornada;
     }
     public function setIdModalidad($IdModalidad){
          $this->IdModalidad = $IdModalidad;
     }
     public function getIdModalidad(){
          return $this->IdModalidad;
     }
     public function setIdTipo_Concreto($IdTipo_Concreto){
          $this->IdTipo_Concreto = $IdTipo_Concreto;
     }
     public function getIdTipo_Concreto(){
          return $this->IdTipo_Concreto;
     }
     public function setIva($Iva){
          $this->Iva = $Iva;
     }
     public function getIva(){
          return $this->Iva;
     }
     public function setLozas($Lozas){
          $this->Lozas = $Lozas;
     }
     public function getLozas(){
          return $this->Lozas;
     }
     public function setMetros_Cubicos($Metros_Cubicos){
          $this->Metros_Cubicos = $Metros_Cubicos;
     }
     public function getMetros_Cubicos(){
          return $this->Metros_Cubicos;
     }
     public function setTuberia($Tuberia){
          $this->Tuberia = $Tuberia;
     }
     public function getTuberia(){
          return $this->Tuberia;
     }
     public function setValor_Metro($Valor_Metro){
          $this->Valor_Metro = $Valor_Metro;
     }
     public function getValor_Metro(){
          return $this->Valor_Metro;
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

//Testear Funcionalidad de clase.section-1
// $Cotizacion = new Cotizacion();
// $Cotizacion->setIdCotizacion(1);
// $Cotizacion->setIdEmpresa(1);
// $Cotizacion->setIdEstado(1);
// $Cotizacion->setIdEtapa(2);
// $Cotizacion->setIdJornada(2);
// $Cotizacion->setIdModalidad(3);
// $Cotizacion->setIdTipo_Concreto(4);
// $Cotizacion->setIva(19);
// $Cotizacion->setLozas(5);
// $Cotizacion->setMetros_Cubicos(10);
// $Cotizacion->setTuberia(10);
// $Cotizacion->setValor_Metro(10000);
// $Cotizacion->setValor_Total(100000);
// $Cotizacion->setObservaciones("Muy mal trabajo");

// echo "Cotizacion N°: " .$Cotizacion->getIdCotizacion();
// echo "<br>";
// echo "Empresa N°: " .$Cotizacion->getIdEmpresa();
// echo "<br>";
// echo "Estado N°: " .$Cotizacion->getIdEstado();
// echo "<br>";
// echo "Etaoa N°: " .$Cotizacion->getIdEtapa();
// echo "<br>";
// echo "Jornada N°: " .$Cotizacion->getIdJornada();
// echo "<br>";
// echo "Modalidad N°: " .$Cotizacion->getIdModalidad();
// echo "<br>";
// echo "Tipo Concreto N°: " .$Cotizacion->getIdTipo_Concreto();
// echo "<br>";
// echo "Iva N°: " .$Cotizacion->getIva();
// echo "<br>";
// echo "Lozas N°: " .$Cotizacion->getLozas();
// echo "<br>";
// echo "Metros Cubicos N°: " .$Cotizacion->getMetros_Cubicos();
// echo "<br>";
// echo "Metris Tuberia N°: " .$Cotizacion->getTuberia();
// echo "<br>";
// echo "Valor Metro N°: " .$Cotizacion->getValor_Metro();
// echo "<br>";
// echo "Valor Total N°: " .$Cotizacion->getValor_Total();
// echo "<br>";
// echo "Observaciones N°: " .$Cotizacion->getObservaciones();
// echo "<br>";


?>