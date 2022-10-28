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
    $nombre = $_GET["nombre"];
    $email = $_GET["email"];
    $descripcion = $_GET["descripcion"];
    $sql = "insert into proveedores (id_prov, nombre, email, descripcion)
    values (null, '$nombre','$email','$descripcion');";

    $result = $conn->query($sql);
    if ($result === true){
    echo "Registro insertado";
    }else{
        echo "Error al insertar registro.";
    }
    
    $conn->close();

    header("Location: listar.php");
?>