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
	$sql = "select * from proveedores where id_prov=$id";
	$result = $conn->query($sql);

    $prov = $result->fetch_assoc();
    var_dump($prov);
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proveedor</title>
</head>
<body>
    
</body>
</html>