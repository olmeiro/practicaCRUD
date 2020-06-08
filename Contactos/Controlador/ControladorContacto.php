<?php

// echo "controlador";
require_once('../Modelo/Contacto.php');
require_once('../Modelo/CrudContacto.php');

 $Contacto = new Contacto();
 $CrudContacto = new CrudContacto();

if(isset($_POST["Registrar"]))
{
    //echo "Registrar";
    $Contacto -> setIdContacto(null);
    $Contacto -> setNombre($_POST["Nombre"]);
    $Contacto -> setApellido_1($_POST["Apellido_1"]);
    $Contacto -> setApellido_2($_POST["Apellido_2"]);
    $Contacto -> setDocumento($_POST["Documento"]);
    $Contacto -> setEstado($_POST["Estado"]);
    $Contacto -> setCorreo($_POST["Correo"]);
    $Contacto -> setTelefono($_POST["Telefono"]);
    $Contacto -> setCargo($_POST["Cargo"]);

    
    // echo "nombre es : " . $Contacto->getNombre() . "<br>";
    // echo "Apellido 1: " . $Contacto->getApellido_1() . "<br>";
    // echo "Apellido 2: " . $Contacto->getApellido_2(). "<br>" ;
    // echo "Documento : " . $Contacto->getDocumento() . "<br>";
    // echo "Estado: " . $Contacto->getDocumento() . "<br>";
    // echo "Correo: " . $Contacto->getCorreo() . "<br>";
    // echo "Telefono: " . $Contacto-> getTelefono() . "<br>";
    // echo "Cargo: " . $Contacto-> getCargo() . "<br>";
    

    $CrudContacto::InsertarContacto($Contacto);
}
else if(isset($_POST['Modificar']))
{
    $Contacto->setIdContacto($_POST['IdContacto']);
    //$Contacto->setIdContacto(null);
    $Contacto->setNombre($_POST['Nombre']);
    $Contacto->setApellido_1($_POST['Apellido_1']);
    $Contacto->setApellido_2($_POST['Apellido_2']);
    $Contacto->setDocumento($_POST['Documento']);
    $Contacto->setEstado($_POST['Estado']);
    $Contacto->setCorreo($_POST['Correo']);
    $Contacto->setTelefono($_POST['Cargo']);
    $Contacto->setCargo($_POST['Telefono']);
   

    $CrudContacto::ModificarContacto($Contacto);
 
}
else if($_GET['Accion']=="EliminarContacto")
{
    $CrudContacto::EliminarContacto($_GET['Documento']);
}

?>