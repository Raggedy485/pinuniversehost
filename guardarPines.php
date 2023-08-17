<?php
	session_start();
	$username = $_SESSION['username'];

	if(!isset($username)) {
		header("Location: adminLogin.html"); 
	}

?>

<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pinuniverse";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Falló la conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario
$universo = $_POST['universo'];
$nombre = $_POST['nombre'];

// Insertar los datos en la tabla
$sql = "INSERT INTO productos2 (universo, nombre) VALUES ('$universo', '$nombre')";

if ($conn->query($sql) === TRUE) {
    // Obtener el ID del último dato insertado
    $lastId = $conn->insert_id;

    // Guardar la foto en la carpeta 'fotos' con el nuevo nombre usando el ID
    $targetDir = "";
    $newFileName = "ImagenesPines/" . $lastId . ".png";
    $targetFile = $targetDir . $newFileName;


    // Verificar que el archivo sea de tipo PNG
    $fileType = strtolower(pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION));
    if ($fileType != "png") {
        echo "Solo se permiten archivos PNG.";
        exit;
    }

    // Mover el archivo a la carpeta 'fotos' con el nuevo nombre
    move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile);

    // Actualizar la columna de la foto en la tabla con el nombre generado
    $sqlUpdate = "UPDATE productos2 SET foto = '$newFileName' WHERE id = $lastId";
    if ($conn->query($sqlUpdate) === TRUE) {
        header("Location: agregarpines.html");
    } else {
        echo "Error al actualizar el nombre de la foto: " . $conn->error;
    }
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
