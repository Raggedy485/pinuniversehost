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
	$consulta = "SELECT * FROM admin";
	$resultado = mysqli_query($conexion, $consulta) or die ("Algo ha salido mal en la consulta");
	
	//establecer y realizar consulta. Guardar en variable.
    $usu=$_GET["email"];
	$contra=$_GET["contra"];
	
	$query="SELECT * FROM admin where email= '$usu'" ;
    $result = mysqli_query($conexion, $query) or die ("Algo salio mal...");

    if($result->num_rows > 0){
		$sql="UPDATE admin SET contraseña = '$contra' WHERE email ='$usu'";
		mysqli_query ($conexion, $sql) or die ("Algo salio mal vato");
		echo "<script type='text/javascript'>alert('Contraseña cambiada exitosamente :D');
        window.location.replace('adminLogin.html'); </script>";
        }else {
			echo "<script type='text/javascript'>alert('Usuario NO EXISTE! :o');
        window.location.replace('pass.html'); </script>";
    }
 	//cerrar conexion con base de datos
	mysqli_close($conexion);
?>