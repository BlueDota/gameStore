<?php
$conn = mysqli_connect('localhost', 'root', '', 'cheetoshowp') or die('Unable to connect');

$cedula = '';
$clave = '';
$nombre = '';
$correo = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM usuario WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $mostrar = mysqli_fetch_array($result);

        $cedula = $mostrar['cedula'];
        $clave = $mostrar['clave'];
        $nombre = $mostrar['nombre'];
        $correo = $mostrar['correo'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];

    $cedula = $_POST['cedula'];
    $clave = $_POST['clave'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $query = "UPDATE usuario set cedula = '$cedula', clave = '$clave',nombre = '$nombre', correo = '$correo' WHERE id=$id";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Task Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header('Location: tablaus.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
						<th>Datos</th>
						</tr>
					</thead>
                    <tr>
							<td><?php echo $mostrar['id'] ?></td>
							<td><?php echo $mostrar['cedula'] ?></td>



						</tr>

    

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">


                    <div class="form-group">
                        <input name="cedula" type="text" class="form-control" placeholder="Update CI">
                    </div>

                    <div class="form-group">
                        <input name="clave" type="text" class="form-control" placeholder="Update password">
                    </div>
                    <div class="form-group">
                        <input name="nombre" type="text" class="form-control" placeholder="Update name">
                    </div>
                    <div class="form-group">
                        <input name="correo" type="text" class="form-control" placeholder="Update mail">
                    </div>

                    <button class="btn-success" name="update">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>