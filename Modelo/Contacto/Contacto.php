<?php
    class Contacto
    {
        //Atributos de clase:
        private $IdContacto;
        private $Nombre;
        private $Apellido_1;
        private $Apellido_2;
        private $Documento;
        private $Estado;
        private $Correo;
        private $Telefono;
        private $Cargo;

        //Definition constructor:
        public function __construct(){}

        //Métodos getter y setter:

        //Methods IdContacto:
        public function setIdContacto($IdContacto)
        {
            $this->IdContacto = $IdContacto;
        }

        public function getIdContacto()
        {
            return $this->IdContacto;
        }

        //methods Nombre:
        public function setNombre($Nombre)
        {
            $this->Nombre = $Nombre;
        }

        public function getNombre()
        {
            return $this->Nombre;
        }

        //methods Apellido_1:
        public function setApellido_1($Apellido_1)
        {
            $this->Apellido_1 = $Apellido_1;
        }

        public function getApellido_1()
        {
            return $this->Apellido_1;
        }

        //methods Apellido_2:
        public function setApellido_2($Apellido_2)
        {
            $this->Apellido_2 = $Apellido_2;
        }

        public function getApellido_2()
        {
            return $this->Apellido_2;
        }

        //Methods Documento:

        public function setDocumento($Documento)
        {
            $this->Documento = $Documento;
        }

        public function getDocumento()
        {
            return $this->Documento;
        }

        //Methods Estado:
        public function setEstado ($Estado)
        {
            $this->Estado = $Estado;
        }

        public function getEstado()
        {
            return $this->Estado;
        }

        //Methods Correo:
        public function setCorreo($Correo)
        {
            $this->Correo = $Correo;
        }

        public function getCorreo()
        {
            return $this->Correo;
        }

        //Methods Telefono:
        public function setTelefono($Telefono)
        {
            $this->Telefono = $Telefono;
        }

        public function getTelefono()
        {
            return $this->Telefono;
        }

        //Methods Cargo
        public function setCargo($Cargo)
        {
            $this->Cargo = $Cargo;
        }

        public function getCargo()
        {
            return $this->Cargo;
        }

    }

    //test of class:


    $ContactoNuevo = new Contacto();
    $ContactoNuevo->setNombre("Angelmiro");
    $ContactoNuevo-> setApellido_1('Perea');
    $ContactoNuevo-> setApellido_2('Suarez');
    $ContactoNuevo-> setDocumento(1026140);
    $ContactoNuevo-> setEstado(1);
    $ContactoNuevo-> setCorreo('perea@.co');
    $ContactoNuevo-> setTelefono(2782025);
    $ContactoNuevo-> setCargo('CEO');


    echo "nombre es : " . $ContactoNuevo->getNombre() . "<br>";
    echo "Apellido 1: " . $ContactoNuevo->getApellido_1() . "<br>";
    echo "Apellido 2: " . $ContactoNuevo->getApellido_2(). "<br>" ;
    echo "Documento : " . $ContactoNuevo->getDocumento() . "<br>";
    echo "Estado: " . $ContactoNuevo->getDocumento() . "<br>";
    echo "Correo: " . $ContactoNuevo->getCorreo() . "<br>";
    echo "Telefono: " . $ContactoNuevo-> getTelefono() . "<br>";
    echo "Cargo: " . $ContactoNuevo-> getCargo() . "<br>";
    

?>