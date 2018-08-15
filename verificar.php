<?php
sleep(1);
include('conexion.php');
if($_REQUEST)
{
	$nodeserie 	= $_REQUEST['nodeserie'];
	$query = "SELECT * FROM  inventario where nodeserie = '".strtolower($nodeserie)."'";
	$results = mysql_query( $query) or die('ok');
	
	if(mysql_num_rows(@$results) > 0) // not available
	{
		echo '<div id="Error">El nodeserie ya esta registrado</div>';
	}
	else
	{
		echo '<div id="Success">Disponible</div>';
	}
	
}?>