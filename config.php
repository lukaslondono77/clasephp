<?php
//tenemos la funcion de php para la cofiguration local hour
date_default_timezone_set('America/Bogota');
//iniciar sessiop
session_start();
//funcion para definir constantes
define('RUTA', 'http://localhost:3000/asistencia/');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_NAME','asistencia');
define('DB_PASS', '');
?>
