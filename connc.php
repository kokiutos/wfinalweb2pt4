<?php

//Variables necesiaras para crear una conexion

$servidor="localhost";
$usuario="root";
$contrasena="";
$basedatos="baldo";//Como se creo en MySql

$MySQLiconexion= new MySQLi($servidor,$usuario,$contrasena,$basedatos);
if($MySQLiconexion->connect_errno)
{
    die("ERROR: ->".$MySQLiconexion->connect_error);
}
?>