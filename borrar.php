<?php 
	var_dump($_GET); 
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
	$sql = "delete from proveedores where id_prov=$id";

    if ($conn->query($sql) === TRUE) {
      echo "Borrado correctamente";
    } else {
      echo "Error borrando elemento: " . $conn->error;
    }
    
    $conn->close();
    header('Location: listar.php');
    die();
    ?>