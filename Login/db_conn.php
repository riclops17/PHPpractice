<?php

$conexion = mysqli_connect(
    'localhost',
    'root',
    '',
    'test_db');

if(!$conexion){
    echo "Conecction Failed";

}
define ('conexion',$conexion);


?>