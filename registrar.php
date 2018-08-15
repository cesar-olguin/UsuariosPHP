<?php
include("conexion.php");
$usuario=$_POST['usuario']; 
$contrasena=$_POST['contrasena']; 
$nombre=$_POST['nombre']; 
$apellidoP=$_POST['apellidoP']; 
$apellidoM=$_POST['apellidoM']; 
$email=$_POST['email']; 

$ver = "SELECT COUNT(*) FROM usuarios WHERE usuario='$usuario'";

$cadena = "INSERT INTO usuarios (usuario,contrasena,nombre,apellidoP,apellidoM,email) VALUES ('$usuario','$contrasena','$nombre','$apellidoP','$apellidoM','$email')";

if(mysql_query($cadena))
{
echo '<script language = javascript>
    alert("Usuario Registrado.")
    self.location = "index.html"
    </script>';
}

else{
echo '<script language = javascript>
    alert("Rellena los campos.")
    self.location = "registro.html"
    </script>';
}

					
?> 