<?php

session_start();

if (!(isset($_SESSION["Nombre"]))) {
 header("location:../Index.php");    
}


?>