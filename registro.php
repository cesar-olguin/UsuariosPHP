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
							<form action="registrar.php" class="cmxform" method="post" id="register-form" novalidate="novalidate">
								<h2 class="post-title">Registro de Usuario</h2></p>
								
								Nombre(s):
								<input class="tb5" name="nombre" id="nombre" type="text" value="" size="30"  onkeypress="return SoloLetras(event)" placeholder="" required autofocus ></input><br><br>
								
								Apellido Paterno:
								<input class="tb5" name="apellidoP" id="apellidoP" type="text" value="" size="30" onkeypress="return SoloLetras(event)"></input><br><br>
							
								Apellido Materno:
								<input class="tb5" name="apellidoM" id="apellidoM" type="text" value="" size="30" onkeypress="return SoloLetras(event)"></input><br><br>
								
								Usuario:
								<input class="tb5"  name="usuario" id="usuario" onkeypress="return SoloLetras(event)" type="text" value="" size="30"></input><br><br>
								
								Contraseña:
								<input class="tb5"  name="contraseña" id="contraseña" type="password" value="" size="30" onkeypress="return validarUsuarios(event)" ></input><br><br>
								
								Confirma la Contraseña:
								<input class="tb5"  name="confirmar_contraseña" id="confirmar_contraseña" type="password" value="" size="30" onkeypress=" return validarUsuarios(event)"></input><br><br>
								
								Email:
								<input class="tb5"  name="email" id="email" type="text" value="" size="30"></input><br><br>
								
								<input class="button" type="submit" value="Agregar" name="agrega">
								<input class="button" type="reset" value="Borrar" name="reset">
								
							</form>
						</font>
					</article>
				</div>				 
			</section>
			
			
			<footer id="footer">
     
					César Armando Olguín Morales
     
			</footer>
			
		</div>
	</body>
</html>
		
		y