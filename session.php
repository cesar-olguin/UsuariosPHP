<?php
//Proceso de conexión con la base de datos
include("conexion.php");
include_once("../sesion.php");
//Iniciar Sesión
//session_start();

//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
echo '<script language = javascript>
alert("Usuario no autenticado.")
self.location = "index.html"
</script>';
}

$id_usuario = $_SESSION['id_usuario'];
/*
$consulta= "SELECT * FROM usuarios WHERE id_usuario='".$id_usuario."'"; 
$resultado= mysql_query($consulta) or die (mysql_error());
$fila=mysql_fetch_array($resultado);
$nombre= $fila['nombre'];
$apellidoP = $fila['apellidoP'];
$apellidoM = $fila['apellidoM'];
*/
$nombre=$Nombre;
$id_usuario=$correo;
$_SESSION['usuario']=$correo;
$apellidoM="";
$apellidoP="";
?>