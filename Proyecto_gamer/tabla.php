


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

	<table > <center>
	<thead>
			<th>id</th>
			<th>Producto</th>
			<th>Marca</th>
			<th>Precio</th>
			<th>Existencia</th>	
		</tr>
		</thead>
		<?php 
		$sql="SELECT * from inventario";
		$result=mysqli_query($conn,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['marca'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
			<td><?php echo $mostrar['existencia'] ?></td>
		</tr>



		
	<?php 
	
	}
	 ?>
	</table>
	           
	
	</div>
	


</body>
</html>