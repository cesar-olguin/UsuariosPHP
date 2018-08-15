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
                    <form action="consultarNombre.php" method="POST">
                    <h2 class="post-title">Consultar Registros</h2></p>
                    Consultar por Nombre:
                    <input class="tb5" name="nombreconsulta'" type="text" value="" size="30" onkeypress="SoloLetras()"></input><br>
                    <input class="button" type="submit" value="Buscar" name="agrega"  >
                    <input class="button" type="reset" value="Borrar" name="reset"><br><br>
                      </form>


                    <form action="consultarCodigo.php" method="post">
                        Consultar por Codigo:
                        <input class="tb5" name="codigoconsulta" type="text" value="" size="30" onkeypress="ValidaSoloNumeros()" ></input><br>
                        <input class="button" type="submit" value="Buscar" name="agrega"  >
                        <input class="button" type="reset" value="Borrar" name="reset"><br><br>
                    <form action="consultardatos.php" method="post">
                      </form>

                    <form action="consultarTipo.php" method="post">
                    Consultar por Tipo:
                    <select class="tb5"  name="tipoconsulta" id="select">
                        <option value="Computo">Computo
                        <option value ="Mueble">Mueble
                        <option value ="Software">Software
                    </select><br>
                    <input class="button" type="submit" value="Buscar" name="search"   ><br><br>

            </form>
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

