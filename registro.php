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
    $nombre=$_GET["nombre"];
    $apellidos=$_GET["apellidos"];
    $email=$_GET["email"];
	$contra=$_GET["contra"];

    $query="SELECT * FROM admin where email= '$email'" ;
    $result = mysqli_query($conexion, $query) or die ("Algo salio mal vato");
    if($result->num_rows > 0){
        echo "<script type='text/javascript'>alert('Usario ya existente!');
        window.location.replace('registro.html'); </script>";
    }
    else {
        $sql="INSERT INTO admin (nomAdmin, apellidosAdmin, email, contraseña) VALUES ('".$nombre."','".$apellidos."','".$email."','".$contra."')";
		mysqli_query ($conexion, $sql) or die ("Algo salio mal vato");
        echo "<script type='text/javascript'>alert('Usuario registrado exitosamente! :D');
        window.location.replace('adminLogin.html'); </script>";
    }
	
		//cerrar conexion con base de datos
        mysqli_close($conexion);
		
?>