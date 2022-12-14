<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proveedor</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="row justify-content-center">
        <div class="col-xl-5 col-sm-10" style=" padding-top: 7rem;">
            <div class="card text-bg-light mb-3" style="height: 70vh;">
                <div class="card-header" style="text-align:center; ">Agregar Proveedor</div>
                <div class="card-body">
                    <div class="row">
                        <div class="container">
                            <form action="guardar_proveedor.php" method="get" class="needs-validation" novalidate>
                                <div class="col-11">
                                    <label for="InputNombre" class="form-label">Nombre:</label>
                                    <input type="text" name="nombre" class="form-control " id="nombre" placeholder="Nombre del proveedor"  required>

                                </div>
                                
                                <div class="col-9">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="email" class="form-control" name="email" maxlength="30" id="email" placeholder="abc@mail.com"  required>
                                </div>
                                <div class="col-11">
                                  <label for="textArea" class="form-label">Descripción</label>
                                  <textarea class="form-control" name="descripcion" id="descripcion" rows="5" placeholder="Describe al proveedor tanto como desees."></textarea>
                                </div>
                                <div class="col pt-2" >
                                	<button class="btn btn-primary" type="submit">Agregar Nuevo proveedor</button>
								</div>
                                
                            </form>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
	<script>
				// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function () {
		'use strict'

		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.querySelectorAll('.needs-validation')

		// Loop over them and prevent submission
		Array.prototype.slice.call(forms)
			.forEach(function (form) {
			form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
				event.preventDefault()
				event.stopPropagation()
				}

				form.classList.add('was-validated')
			}, false)
			})
		})()
	</script>

</body>
</html>