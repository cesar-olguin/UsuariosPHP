<?php
sleep(1);
include('conexion.php');
if($_REQUEST)
{
	$usuario 	= $_REQUEST['usuario'];
	$query = "SELECT * FROM usuarios where usuario = '".strtolower($usuario)."'";
	$results = mysql_query( $query) or die('ok');
	
	if(mysql_num_rows(@$results) > 0) // not available
	{
		echo '<div id="Error">Usuario ya existente</div>';
	}
	else
	{
		echo '<div id="Success">Disponible</div>';
	}
	
}?>