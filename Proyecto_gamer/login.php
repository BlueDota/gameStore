<?php

session_start();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<header>
   <link rel=StyleSheet href="css/style.css" TYPE="text/css" MEDIA=screen>
   <title>Acdceder a Cheetoshop</title>
</header>

<body>
   <section class="form-register">
      <center>
         <h4>Ingreso al Almacen</h4>
         <form name="Consulta" method="post">

            Cedula del usuario:<input class="controls" type="text" name="correo" maxlength="20" placeholder="Ingrese correo de usuario" ?>

            Clave del usuario:<input class="controls" type="password" name="clave" maxlength="20" placeholder="Ingrese su clave" ?>

            <button class="botons" name="login"  type= "submit">Aceptar</button>
          


            ¿No tienes cuenta? <a href="registrar.php">Click para registrarte¡¡¡</a>
         </form>
      </center>
   </section>
   </head>



<?php
if (isset($_POST['login'])) {
   $Username = $_POST['correo'];
   $Pass = $_POST['clave'];

   $select = mysqli_query($conn, " SELECT * FROM usuario WHERE correo = '$Username' AND clave = '$Pass' ");
   $row  = mysqli_fetch_array($select);

   if (is_array($row)) {
      $_SESSION["cedula"] = $row['correo'];
      $_SESSION["clave"] = $row['clave'];
   } else {
      echo '<script type = "text/javascript">';
      echo 'alert("Invalid Username or Password!");';
      echo 'window.location.href = "login.php" ';
      echo '</script>';
   }
}
if (isset($_SESSION["cedula"])) {
   header("Location:cuenta.php");
}
?>


</body>

</html>