<?php
include("session.php");
?>

<!DOCTYPE html>
		<html lang="en">
			<head>
				<meta charset="utf-8">
				<title>Mini-Sistema de Inventario</title>
				<link href="style.css" rel="stylesheet" type="text/css">
				<script src="validar.js" type="text/javascript"></script>
				<link href="media-queries.css" rel="stylesheet" type="text/css">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width; initial-scale=1.0">
				
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
				<script type="text/javascript" src="../script.js"></script>
				<script type="text/javascript" src="jquery.validate.min.js"></script>
				
				<link href="css.css" media="screen" rel="stylesheet" type="text/css" />
				<script type="text/javascript">
			
				$(document).ready(function() {	
				$('#nodeserie').blur(function(){
					
					$('#Info').html('<img src="loader.gif" alt="" />').fadeOut(1000);
					
					var nodeserie = $(this).val();		
					var dataString = 'nodeserie='+nodeserie;
					
					$.ajax({
						type: "POST",
						url: "verificar.php",
						data: dataString,
						success: function(data) {
							$('#Info').fadeIn(1000).html(data);
							//alert(data);
						}
					});
				});              
			});    
		</script>
	
	
    </head>
    <body>
    <div id="pagewrap">

       <header id="header"><h1>Mini-Sistema de Inventario</h1>
        <nav>
            <ul id="main-nav" class="clearfix">
        <li><a href="inicio.php">Inicio</a></li>
                <li><a href="inventario.php">Inventario</a></li>
                <li><a href="consultar.php">Consultas</a></li>
                <li><a href="listar.php">Listar</a></li>
            </ul>
        </nav>
        </header>


        <section>
         <div id="content">
           <article class="post clearfix">
            <font face="Georgia">
                <form action="guardar.php" method="post" >
                    <h2 class="post-title">Agrear Registros</h2></p>
                    Numero de Serie:
                    <input class="tb5" name="nodeserie" id="nodeserie"  value="" size="30" onkeypress="ValidaSoloNumeros()" placeholder="" required autofocus /><div id="Info"></div><br><br>
                    Nombre:
                    <input class="tb5" name="nombre" id="nombre" type="text" value="" size="30" onkeypress="return SoloLetras(event)" ></input><br><br>
                    Descripcion:
                    <input class="tb5"  name="descripcion" id="descripcion" type="text" value="" size="30"></input><br><br>
                    Tipo:
                    <select class="tb5" name="tipo" id="select">
                        <option value="Computo">Computo
                        <option value ="Mueble">Mueble
                        <option value ="Software">Software
                    </select><br><br>
                    <input class="button" type="submit" value="Agregar" name="agrega" onsubmit="validarForm(formulario)">
                    <input class="button" type="reset" value="Borrar" name="reset">
            </form>
      </article>
    </div>

 </section>
</font>
 <aside id="sidebar">

        <section class="widget">
            <h4 class="widgettitulo"> Sesión</h4>

            <br>Usted a iniciado sesión como: <strong><? echo  $_SESSION['usuario'];?></strong></p>
			<p>Nombre(s): <? echo $nombre; ?></p>
			<p>Apellido Paterno: <? echo $apellidoP; ?></p>
			<p>Apellido Materno: <? echo $apellidoM; ?></p>
			<button class="button"  type="submit" onclick="location='desconectar.php'" >Cerrar Sesión</button>
        </section>
    </aside>


    <footer id="footer">
            <small>
            César Armando Olguín Morales
            </small>
        </footer>

    </div>
  </body>
</html>
