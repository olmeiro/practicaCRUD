<?php 

require_once('../../conexion.php');
require_once('../../Modelo/Maquinaria/Maquinaria.php');
require_once('../../Modelo/Maquinaria/CrudMaquinaria.php');

$CrudMaquinaria = new CrudMaquinaria();
$ListaMaquinaria = $CrudMaquinaria->ListarMaquinaria();
var_dump($ListaMaquinaria);

?>