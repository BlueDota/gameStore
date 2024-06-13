<?php  

$conn = mysqli_connect('localhost', 'root', '', 'cheetoshowp') or die('Unable to connect');




if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = "DELETE FROM usuario where id=$id";
    $result  = mysqli_query($conn,$query);
    if (!$result){
        die("ERROR AL BORRAR");
    }
  
    
    $_SESSION['message_type'] = 'danger';
    header("Location: cuenta.php");
 
   
}

?>
