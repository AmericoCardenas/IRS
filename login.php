<?php
   
   session_start();
   require("conexion.php");
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña']; 
    $errors = array();

$query = "SELECT * FROM USUARIOS where CORREO = '$usuario' and CONTRASEÑA = '$contraseña' ";

$results = mysqli_query($con,$query);

if(mysqli_num_rows($results) == 1){
   $logged_user = mysqli_fetch_assoc($results);
   if($logged_user['ROL']=='ADMIN'){

    $_SESSION['user'] = $logged_user;
    $_SESSION['success']  = "You are now logged in";

   echo "<script type='text/javascript'> //not showing me this
   alert('Bienvenido');
   location.href='menuadmin.html';
</script>";
//   header("location: index.html");
}else{
$_SESSION['user'] = $logged_USER;
$_SESSION['success']  = "You are now logged in";
header('location: index.html');
}
}else{
    echo "<script type='text/javascript'> //not showing me this
   alert('Usuario o Contraseña incorrecta');
   location.href='login.html';
</script>";
}
?>