<?php
sleep(1);
include('conexion.php');
if($_REQUEST)
{
	$email 	= $_REQUEST['email'];
	$query = "SELECT * FROM usuarios where email = '".strtolower($email)."'";
	$results = mysql_query( $query) or die('ok');
	
	if(mysql_num_rows(@$results) > 0) // not available
	{
		echo '<div id="Error">El email ya esta registrado</div>';
	}
	else
	{
		echo '<div id="Success">Disponible</div>';
	}
	
}?>