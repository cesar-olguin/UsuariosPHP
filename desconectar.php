<?php 
session_start();

if ($_SESSION['usuario'])
{	
	session_destroy();
	echo '<script language = javascript>
	alert("Su sesion ha terminado correctamente")
	self.location = "index.html"
	</script>';}
else
{
	echo '<script language = javascript>
	alert("No ha iniciado ninguna sesión, por favor regístrese")
	self.location = "formulario.html"
	</script>';}
?>