<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css"/>
     
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>

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
	
	<div class="row justify-content-center">
    <div class="col-11">
	<table id="clientes" class="table table__list table-hover table-dark table-striped"  style="width: 100%;">
        <thead>
            <tr>
                <th class="table-secondary">#</th>
                <th class="table-secondary">Nombre</th>
                <th class="table-secondary">Email</th>
                <th class="table-secondary">Descripción</th>
                <th class="table-secondary" >Acciones</th>
            </tr>
        </thead>
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
                  echo "<td><a href='" . $row['id'] . "' class='btn btn-primary'>Editar</a>";
				  echo '<form action="" method="get" style="display: inline;">
				  <input type="hidden" name="id" value="' . $row['id'] . '">
				  <input type="submit" value="Borrar" onclick="return confirm(\'Esta seguro de borrar?\')" class="btn btn-success">
				  </form>';
				  echo "</td>";
				  echo "</tr>";
				  
				}
			  } else {
				echo "<tr><td colspan='3'>No hay clientes.</td></tr>";
			  }
			?>
		</tbody>
	</table>

    <script>
        $(document).ready(function () {
        $('#clientes').DataTable();
        });
    </script>
    <a href="index.html" class="btn btn-dark">Ir a la al menu</a>
	
	</div>
	</div>
</body>
</html>
<?php
  $conn->close();
?>