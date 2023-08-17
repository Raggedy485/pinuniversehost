<?php
	session_start();
	$username = $_SESSION['username'];

	if(!isset($username)) {
		header("Location: adminLogin.html"); 
	}

?>
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
	$consulta = "SELECT * FROM productos2";
	$resultado = mysqli_query($conexion, $consulta) or die ("Algo ha salido mal en la consulta");
	
	$id=$_GET["id"];
	
	$sql="DELETE FROM productos2 WHERE id = $id";
		mysqli_query ($conexion, $sql) or die ("Algo salio mal vato");
		//cerrar conexion con base de datos
		mysqli_close($conexion);

		header("Location: admin.php");
	
?>
