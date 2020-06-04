<?php

require_once('../Modelo/Maquinaria/Maquinaria.php');
require_once('../Modelo/Maquinaria/CrudMaquinaria.php');

$Maquinaria = new Maquinaria();
$CrudMaquinaria = new CrudMaquinaria();

if (isset($_POST["CrearMaquina"])) {

    $Maquinaria->setidmaquinaria(null);
    $Maquinaria->setnombreempresa($_POST["nombreempresa"]);
    $Maquinaria->setdirectorobra($_POST["directorobra"]);
    $Maquinaria->setconstructora($_POST["constructora"]);
    $Maquinaria->setmes($_POST["mes"]);
    $Maquinaria->setmaquina($_POST["maquina"]);
    $Maquinaria->setoperario1($_POST["operario1"]);
    $Maquinaria->setoperario2($_POST["operario2"]);

    $CrudMaquinaria::InsertarMaquinaria($Maquinaria);

}

?>