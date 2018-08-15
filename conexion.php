<?php
$servidor = "148.213.20.205";$usuario = "servicio";$contraseña = "s0cial";
//$servidor = "localhost";$usuario = "root";$contraseña = "root";
$BD = "minisistema";


$conexion = @mysql_connect($servidor, $usuario, $contraseña);
mysql_set_charset('utf8');
if (!$conexion) {
    die("No pudo conectarse:" . mysql_error());
    }
    else{
        //echo 'Conectado  satisfactoriamente al servidor <br />';
        }
        mysql_select_db($BD, $conexion) or die(mysql_error($conexion));
?>