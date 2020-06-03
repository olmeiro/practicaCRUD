<?php
require_once('../Modelo/Usuario/usuario.php');
require_once('../Modelo/Usuario/crudUsuario.php');

$usuario = new usuario();
$crudUsuario = new crudUsuario();

if(isset($_POST["btnRegistrarUsuario"])){

    $usuario->setIdUsuario(NULL);
    $usuario->setNombre($_POST["nombre"]);
    $usuario->setClave($_POST["clave"]);
    $usuario->setTipoUsuario($_POST["tipoUsuario"]);
    $usuario->setEstado($_POST["estado"]);

    $crudUsuario::InsertarUsuario($usuario);

}
?>