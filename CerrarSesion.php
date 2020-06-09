<?php
//Destrucción de la session en la aplicación;
session_start();
session_destroy(); //Función de php que destruye la sesión

header("Location:index.php");



 ?>