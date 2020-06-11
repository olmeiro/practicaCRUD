<?php
class Estado
{
    //Atributos de la clase:
    private $IdEstado;
    private $Estado;

    //constructor:
    public function __construct(){}

    //Methods:

    public function setIdEstado($IdEstado)
    {
        $this->IdEstado = $IdEstado;
    }

    public function getIdEstado()
    {
        return $this->IdEstado;
    }

    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }

    public function getEstado()
    {
        return $this->Estado;
    }
}
?>