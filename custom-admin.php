<?php
	session_start();
	$username = $_SESSION['username'];

	if(!isset($username)) {
		header("Location: adminLogin.html"); 
	}

?>

<?php

	//Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "pinuniverse";
	
	//creacion de la conexion a la base de datos con mysql_connect()
	$conexion = mysqli_connect($servidor, $usuario, "") or die ("No se a podido conectar al servidor de la base de datos");
	
	// seleccion de la base de datos a utilizar
	$db = mysqli_select_db($conexion, $basededatos) or die ("Ups! Parece ser que no se a podido conectar a la base de datos");
	
	//establecer y realizar consulta. Guardar en variable.
	$consulta = "SELECT id, descrip, ancho, alto, nombre, correo, img FROM custom ORDER BY id";
	$resultado = mysqli_query($conexion, $consulta)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <!-- Fonts de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;700&family=IBM+Plex+Sans:wght@300;500;700&display=swap" rel="stylesheet">
    
    <title>PinUniverse - custom-admin</title>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="row" id="headerMenu">
            <div class="col-3 logo">
                <a href="admin.php"><img src="Logo - PinUniverse.png"></a>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-2 buttons-nav opcSeleccionada"><a href="custom-admin.php">Custom</a></div>
                    <div class="col-2 buttons-nav"><a href="agregarPines.html">Agregar</a></div>
                    <div class="col-2 buttons-nav"><a href="eliminar.html">Eliminar</a></div>
		    <div class="col-2 buttons-nav"><a href="logout.php">Logout</a></div>
                </div>
            </div>
        </div>
    </header>

    <!-- cuerpo inicio -->
    <div class="row tituloAdmin">
        <div class="col centrar">
            <h2>Pedidos personalizados</h2>  
        </div>  
    </div>
    <div class="row">
        <div class="col centrar">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Descripcion</th>
                    <th>Ancho</th>
                    <th>Alto</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Foto</th>
                </tr>
                
                <?php	
                while ($columna = mysqli_fetch_array($resultado))
                { 
                ?>
                    <tr>
                        <td><?php echo $columna['id']; ?></td>
                        <td><?php echo $columna['descrip']; ?></td>
                        <td><?php echo $columna['ancho']; ?></td>
                        <td><?php echo $columna['alto']; ?></td>
                        <td><?php echo $columna['nombre']; ?></td>
                        <td><?php echo $columna['correo']; ?></td>
                        <td><img src="<?php echo $columna['img']; ?>" style="width:150px; height:150px;"></td>
                    </tr>
		        <?php } ?>
            </table>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="row">
            <div class="col px-0">
                <h5>Copyright © PinUniverseMX</h5>
            </div>
        </div>
    </footer>



</body>
</html>
