<?php
require("conexion.php");

$consultar = "SELECT * FROM USUARIOS";
$query  = mysqli_query($con,$consultar);
$array = mysqli_fetch_array($query);

?>