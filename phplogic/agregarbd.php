<?php
require("../conexion.php");

//VERIFICAR SI LLEGARON LAS VARIABLES//
if(isset($_POST["nombre"],$_POST["correo"],$_POST["contra"],$_POST["rol"])
   and $_POST["nombre"] !="" and $_POST["correo"] !="" and $_POST["contra"] !="" and $_POST["rol"] !=""){
    
    //TRASPASAR A VARIABLES LOCALES
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contra = $_POST["contra"];
    $rol = $_POST["rol"];

//Preparamos la orden SQL
$consulta = "INSERT INTO usuarios(NOMBRE,CORREO,CONTRA,ROL) VALUES ('$nombre','$correo','$contra','$rol')";
//EJECUCION DE CONSULTA SQL//
if (mysqli_query($con,$consulta) ){
    echo "<script> alert('Registro agregado');</script>";
    echo "<script>window.opener.document.location='../colaboradoresadmin.php';</script>";
    echo "<script>
    var winclosed = window.close();
    setTimeout(function(){ winclosed.close() }, 3000);
    </script>"; 
    } else {
    echo "<script>alert('No se agregó...');</script>";
    }

   }else {

    echo '<script> alert("Falto algun campo, favor de completar el formulario");</script>';
    echo "<script>
    var winclosed = window.close();
    setTimeout(function(){ winclosed.close() }, 3000);
    </script>";
    }
    ?>