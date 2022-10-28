<?php 
	//var_dump($_GET); 
    $servername = "localhost";
	$username = "root";
	$password = "2208";
	$dbname = "tienda";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $email = $_GET['email'];
    $descripcion = $_GET['descripcion'];

    $sql = "Update proveedores Set nombre='$nombre', email='$email', descripcion='$descripcion' where id_prov=$id;";
    var_dump($sql);
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
    header('Location: listar.php');
    die();
?>