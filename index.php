<?php
// va a requerir el cofig  y el controllardor
require_once('config.php');
require_once('controller/homeController.php');

//vamos a cxrear una variable global para poder llamar la clase  home en cualquier momento
//instanciamos la clase
$home =  new Home();
// de esa clase vamos a tomar el index( metodo)
$home->index();
?>