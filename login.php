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
	session_start();

    $usuario=$_POST["email"];
	$contrasena=$_POST["contra"];
    
    $query="SELECT * FROM admin where email= '$usuario' AND contraseña = '$contrasena'" ;
    $result = mysqli_query($conexion, $query) or die ("Algo salio mal...");


    if($result->num_rows > 0){
		$query="SELECT CONCAT(nomAdmin, ' ', apellidosAdmin) AS username FROM admin where email= '$usuario' AND contraseña = '$contrasena'" ;
    	$user = mysqli_query($conexion, $query) or die ("Algo salio mal...");
		$usu = mysqli_fetch_assoc($user);
		$username = $usu['username'];
		$_SESSION['username'] = $username;
        header("Location: admin.php");

        }else {
		echo "<script type='text/javascript'>alert('Usuario o contraseña incorrectos!');
		window.location.replace('adminLogin.html'); </script>";
    }
	mysqli_close($conexion);
?>
