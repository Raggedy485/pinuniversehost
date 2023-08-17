<?php
	//Ejemplo de conexòn a base de datos MySQL con php

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
	$consulta = "SELECT * FROM custom";
	$resultado = mysqli_query($conexion, $consulta) or die ("Algo ha salido mal en la consulta");
	
	$desc=$_POST["desc"];
	$ancho=$_POST["ancho"];
	$alto=$_POST["alto"];
    $nombre=$_POST["name"];
	$correo=$_POST["email"];

	
	$sql="INSERT INTO custom (descrip, ancho, alto, nombre, correo) VALUES ('".$desc."',".$ancho.",".$alto.",'".$nombre."','".$correo."');";
	mysqli_query ($conexion, $sql);

		
			$lastId = $conexion->insert_id;
		
			// Guardar la foto en la carpeta 'fotos' con el nuevo nombre usando el ID
			$targetDir = "";
			$newFileName = "ImagenesPines/custom/" . $lastId . ".png";
			$targetFile = $targetDir . $newFileName;
		
		
			
		
			// Mover el archivo a la carpeta 'fotos' con el nuevo nombre
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile);
		
			// Actualizar la columna de la foto en la tabla con el nombre generado
			$sqlUpdate = "UPDATE custom SET img = '$newFileName' WHERE id = $lastId";
			if ($conexion->query($sqlUpdate) === TRUE) {
				echo "Los datos se guardaron correctamente.";
			} else {
				echo "Error al actualizar el nombre de la foto: " . $conexion->error;
			}
		
		
		//cerrar conexion con base de datos
		mysqli_close($conexion);

		header("Location: inicio.php");
	
?>