<?php


$conn = mysqli_connect('localhost', 'root', '', 'cheetoshowp') or die('Unable to connect');

?>


<!DOCTYPE html>
<html>

<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" href="css/tables.css">
	<link rel="stylesheet" href="estilosdos.css">


</head>

<body>
	<header class="bg_animate">
		<div class="header_nav">
			<div class="contenedor">
				<h1>For Challenger Hands</h1>
				<hr>
				<nav>
					<a href="#">Inicio</a>
					<a href="#">Servicios</a>
					<a href="#">Contacto</a>
					<a href="cuenta.php">Regresar a la cuenta</a>

				</nav>
			</div>
			<hr>
		</div>

		<hr>
		<div id="main-container">

			<br>

			<table>
				<center>
					<thead>
						<th>ID</th>
						<th>Cedula</th>
						<th>Clave</th>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Acciones</th>

						</tr>
					</thead>
					<?php

					$conn = mysqli_connect('localhost', 'root', '', 'cheetoshowp') or die('Unable to connect');


					$sql = "SELECT * from usuario";
					$result = mysqli_query($conn, $sql);

					while ($mostrar = mysqli_fetch_array($result)) {
					?>

						<tr>
							<td><?php echo $mostrar['id'] ?></td>
							<td><?php echo $mostrar['cedula'] ?></td>
							<td><?php echo $mostrar['clave'] ?></td>
							<td><?php echo $mostrar['nombre'] ?></td>
							<td><?php echo $mostrar['correo'] ?></td>

<td>
							<a href="editar.php?id=<?php echo $mostrar['id'] ?>" class="btn btn-secondary"> modificar
                                        <i class="fas fa-marker"> </i>
                                    </a>
									</td>
							
							<td>
								<a href="borrar.php?id=<?php echo $mostrar['id'] ?>">

									borrar </a>
							</td>

						</tr>




					<?php

					}
					?>
			</table>


		</div>



</body>

</html>