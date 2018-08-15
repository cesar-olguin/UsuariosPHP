<?php
include("session.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <title>Mini-Sistema de Inventario</title>
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="conten-type" content="text/html; charset=UTF-8" />
        <link href="media-queries.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

   <link rel="stylesheet" href="css/themes/default/hermes-app.css">
    <link rel="stylesheet" href="css/themes/default/jquery.mobile.structure-1.1.1.css">
    <link rel="stylesheet" href="css/themes/default/jquery.mobile.structure-1.1.1.min.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery.mobile-1.1.1.js"></script>
	
	
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
            <h2 class="post-title">Listar Registros</h2></p>
                    <?php
                        include("conexion.php");
                        $sql="select * from inventario";
                        $db=mysql_query($sql);
                        while($lista=mysql_fetch_array($db))
                        {
                            echo "<br>";
                            echo "Id:  " , $lista['nodeinve']."       |         ";
                            echo $lista['nodeserie']."      |          ";
                            echo $lista['nombre']."          |      ";
                            echo $lista['descripcion']."     |           ";
                            echo $lista['tipo']."        |        ";
                        }
                    ?>

            
  </div>
      </article>
 </section>
</font>
 <aside id="sidebar">

        <section class="widget">
            <h4 class="widgettitulo"> Sesión</h4>

            <br>Usted a iniciado sesión como: <strong><? echo  $_SESSION['usuario'];?></strong></p>
			<p>Nombre(s): <? echo $nombre; ?></p>
			<p>Apellido Paterno: <? echo $apellidoP; ?></p>
			<p>Apellido Materno: <? echo $apellidoM; ?></p>
			<button class="button"  type="submit" onclick="location='desconectar.php?axn=x'" >Cerrar Sesión</button>
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
