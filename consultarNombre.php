<?php
include("session.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <title>Mini-Sistema de Inventario</title>
<link href="style.css" rel="stylesheet" type="text/css">
        <link href="media-queries.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

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
<h2 class="post-title">Consultar Registros</h2></p>
                        <?php
                            include("conexion.php");
                            $sql ="select * from inventario where nombre='$_POST[nombreconsulta]'";
                            $db=mysql_query($sql);
                            while($lista=mysql_fetch_array($db))
                            {
                                echo "<br>";
                                echo $lista['nodeinve']."       |         ";
                                echo $lista['nodeserie']."      |          ";
                                echo $lista['nombre']."          |      ";
                                echo $lista['descripcion']."     |           ";
                                echo $lista['tipo']."        |        ";
                            }
                        ?>
                </font>
      </article>
 </section>

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
