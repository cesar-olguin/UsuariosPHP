<?php 
//Proceso de conexión con la base de datos
include("conexion.php");

//Inicio de variables de sesión
if (!isset($_SESSION)) {
  session_start();
}

//Recibir los datos ingresados en el formulario
$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];

//Consultar si los datos son están guardados en la base de datos
$consulta= "SELECT * FROM usuarios WHERE usuario='".$usuario."' AND contrasena='".$contrasena."'"; 
echo $consulta;
$resultado= mysql_query($consulta) or die (mysql_error());
$fila=mysql_fetch_array($resultado);


if (!$fila[0]) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
    echo '<script language = javascript>
    alert("Usuario o Password errados, por favor verifique.")
    self.location = "index.html"
    </script>';
}
else //opcion2: Usuario logueado correctamente
{
    //Definimos las variables de sesión y redirigimos a la página de usuario
    $_SESSION['id_usuario'] = $fila['id_usuario'];
	  $_SESSION['usuario'] = $fila['usuario'];
    header("Location: inicio.php");
}
?>