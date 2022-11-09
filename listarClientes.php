<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<title>Lista de elementos</title>

</head>
<body>
    <h1 style="text-align: center;">Listar datos:</h1>
	<?php
	// Esto es php 
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

	$sql = "select * from clientes";

	$result = $conn->query($sql);

	?>
	<p style="text-align: center;">El registro insertado es:</p>
	<div class="row justify-content-center">
    <div class="col-11">
	<table class="table table__list table-hover table-dark table-striped"  style="width: 100%;">
		<tr>
			<th class="table-secondary">#</th>
			<th class="table-secondary">Nombre</th>
			<th class="table-secondary">Email</th>
			<th class="table-secondary">Descripción</th>
			
		</tr>
		<tbody>
			<?php
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
				  echo "<tr>";
				  echo "<td>" . $row['id'] . "</td>";
				  echo "<td>" . $row["nombre"] . "</td>";
				  echo "<td>" . $row["email"] . "</td>";
				  echo "<td>" . $row["descripcion"] . "</td>";
				  
				  echo "</td>";
				  echo "</tr>";
				  
				}
			  } else {
				echo "<tr><td colspan='3'>No hay clientes.</td></tr>";
			  }
			?>
		</tbody>
	</table>
    <a href="index.html" class="btn btn-dark">Ir a la al menu</a>
	
	</div>
	</div>
</body>
</html>
<?php
  $conn->close();
?>