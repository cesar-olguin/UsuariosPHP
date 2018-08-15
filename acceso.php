<?php  
session_start();  
include_once "config.php";  
   
function verificar_login($user,$password,&$result) {  
  
    $sql = "SELECT usuario, password FROM usuarios WHERE usuario='$user' AND password='$password'";  
    $rec = mysql_query($sql);  
    $count = 0;  
   
    while($row = mysql_fetch_object($rec))  
    {  
        $count++;  
        $result = $row;  
    }  
    if($count == 1)  
    {  
        return 1;  
    }  
    else  
    {  
        return 0;  
    }  
}  
if(!isset($_SESSION['usuario']))  
{  
    if(isset($_POST['usuario']))  
    {  
        if(verificar_login($_POST['usuario'],$_POST['password'],$result) == 1)  
        {  
            $_SESSION['usuario'] = $result->usuario;  
            header("location:acceso.php");  
        }  
        else  
        {  
    echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';  
        }  
    }  
?>  
<html>  
<head>  
<title>Titulo de la webapp</title>  
  
/*Archivo que llama a las librerias y Css*/  
<?php require_once("head.php"); ?>   
</head>  
<body>  
  
<div data-add-back-btn="false" data-position="fixed" data-role="page">  
<div data-role="header">  
<h1>  
Inicio de Sesion</h1>  
</div>  
<div data-role="content">  
<form action="" method="post">  
<div class="ui-hide-label" data-role="fieldcontain">  
<input data-theme="a" id="usuario" name="usuario" placeholder="Usuario" value="" type="text">  
      </div>  
<div class="ui-hide-label" data-role="fieldcontain">  
<input data-theme="a" id="password" name="password" placeholder="Contraseña" type="password">  
      </div>  
<div style="margin: 30px 0px 10px;">  
<input data-theme="a" id="enviar" name="enviar" value="enviar" type="submit">  
      </div>  
</form>  
</div>  
<div data-position="fixed" data-role="footer" data-theme="a">  
<h1>Pie de tu página</h1>  
</div>  
</div>  
<?php   
}else {   
?>   
<html>  
<head>  
  
<title>Titulo de la webapp o de la sección</title>  
  
<?php require_once("head.php"); ?> <!--Archivo que llama a las librerias y Css´s  
</head>  
</html>  
  
  
<div data-add-back-btn="false" data-position="fixed" data-role="page" data-theme="a">  
<div data-role="header" data-theme="a" id="home">  
<h1>Pagina Principal</h1>  
</div>  
<div data-role="content">  
<strong>Bienvenido.Aqui puedes poner el codigo de tu web,o si quieres llamar al nombre de usuario.</strong>  
     
  
<div data-role="controlgroup">  
Aca un boton para salir  
  
<a data-role="button" href="logout.php">Salir</a>  
   </div>  
</div>  
<div data-position="fixed" data-role="footer" data-theme="a">  
<h1>Pie de tu página</h1>  
</div>  
</div>  
<?php   
}   
?> 