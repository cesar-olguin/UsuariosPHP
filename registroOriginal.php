<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8">
        <title>Mini-Sistema de Inventario</title>
<link href="style.css" rel="stylesheet" type="text/css">

<script src="validator.js" type="text/javascript"></script>
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
		<li><a href="index.html">Inicio</a></li>
            </ul>
        </nav>
		</header>
		
		
		<section>
		 <div id="content">
		   <article class="post clearfix">
            <font face="Georgia">
<id="banner"><!--Titulo -->
<form  action="registrar.php" method="post" class="cmxform" id="signupForm"> 
<h2 class="post-title">Registro de Usuario</h2></p>
		
		             Nombre(s):
                    <input class="tb5" name="nombre" id="nombre" type="text" value="" size="30"  onkeypress="return SoloLetras(event)" placeholder="" required autofocus ></input><br><br>
                    Apellido Paterno:
                    <input class="tb5" name="apellidoP" id="apellidoP" type="text" value="" size="30" onkeypress="return SoloLetras(event)"></input><br><br>
                    
                    Apellido Materno:
                    <input class="tb5" name="apellidoP" id="apellidoP" type="text" value="" size="30" onkeypress="return SoloLetras(event)"></input><br><br>
					
					Usuario:
                    <input class="tb5"  name="usuario" id="usuario" onkeypress="return SoloLetras(event)" type="text" value="" size="30"></input><br><br>
					
					 Contraseña:
                    <input class="tb5"  name="contraseña" id="contraseña" type="password" value="" size="30" onkeypress="return SoloLetras(event)" ></input><br><br>
					
					 Confirma la Contraseña:
                    <input class="tb5"  name="confirmar_contraseña" id="confirmar_contraseña" type="password" value="" size="30"></input><br><br>
					
					 Email:
                    <input class="tb5"  name="email" id="email" type="text" value="" size="30"></input><br><br>
 
                    <input class="button" type="submit" value="Agregar" name="agrega">
                    <input class="button" type="reset" value="Borrar" name="reset">
		</form>
  </div>
      </article>              
 </section>
 
 
	<footer id="footer">
            <small>      
			César Armando Olguín Morales
            </small>        
        </footer>

	</div>
  </body>
</html>