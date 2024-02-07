<?php

//iniciar sesion
session_start();

// conectar con la base de datos
$conexion = mysqli_connect(
'localhost',
'root',
'',
'php_crud_agenda');

/*para saber si la bd esta conectada
if(isset($conexion)){
    echo "db is connected";
}
*/

define ('CONEXCHION',$conexion);


?>
