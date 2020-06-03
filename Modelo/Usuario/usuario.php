<?php
class Usuario{
    private $IdUsuario;
    private $Nombre;
    private $Clave;
    private $TipoUsuario;
    private $Estado;

    public function __construct(){}

    public function setIdUsuario($IdUsuario){
        $this -> IdUsuario = $IdUsuario;
    }

    public function getIdUsuario(){
        return $this->IdUsuario;
    }

    public function setNombre($Nombre){
        $this -> Nombre = $Nombre;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function setClave($Clave){
        $this -> Clave = $Clave;
    }

    public function getClave(){
        return $this->Clave;
    }

    public function setTipoUsuario($TipoUsuario){
        $this -> TipoUsuario = $TipoUsuario;
    }

    public function getTipoUsuario(){
        return $this->TipoUsuario;
    }

    public function setEstado($Estado){
        $this -> Estado = $Estado;
    }

    public function getEstado(){
        return $this->Estado;
    }

}
?>