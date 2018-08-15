
                            <?php
                            include("conexion.php");

                            $nodeserie=$_POST['nodeserie'];
                            $nombre=$_POST['nombre'];
                            $descripcion=$_POST['descripcion'];
                            $tipo=$_POST['tipo'];
                            $cadena = "INSERT INTO   inventario (nodeserie,nombre,descripcion,tipo)  VALUES ('$nodeserie', '$nombre', '$descripcion', '$tipo')";
                            if(mysql_query($cadena)){
                            echo '<script language = javascript>
    alert("Registro Agregado.")
    self.location = "inventario.php"
    </script>';
                            }
                            else{
                            echo '<script language = javascript>
    alert("El registro no se pudo agregar.")
    self.location = "inventario.php"
    </script>';
                            }
                            ?>
