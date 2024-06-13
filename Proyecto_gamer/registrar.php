

<!DDOCTYPE html>
<html lang="es">
<head>
<meta charset= "UTF-8">
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel=StyleSheet href="css/style.css"  TYPE="text/css" MEDIA=screen>
<title>formulario de Registro de Usuario </title>
</head>
<body>
<section class="form-register">
<h4> Formulario Registro </h4>
<form action="registrar.php" metHod="POST">

<input class="controls" type ="text" name="cedula" id = "cedula" placeholder="Ingrese su cédula"?>
<input class="controls" type ="password" name="clave" id = "clave" placeholder="Ingrese su contraseña"?>
<input class="controls" type ="text" name="nombre" id = "nombre" placeholder="Nombre"?>
<input class="controls" type ="text" name="correo" id = "correo" placeholder="Correo"?>
<p> Estoy de acuerdo con <a href="#"> Terminos y Condiciones  </a></p>
<center><button class="botons" name="registrar" type="submit">Registrar</button></center>
</form>
</section>
</body>
</html>
<?PHP





   header("location: index.html");




?>