<?php 

	$con=mysqli_connect('localhost','root','','irsbd');

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Colaboradores | IRS</title>
        <link href="css/colaboradores.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body>
    <!--COLABORADORES-->
<!--MENU-->
<div class="custom-padding">
    <nav>
      <ul class="menu-area">
        <li><img src="img/irs.png" width="100px" height="30px"></li>
        <li><a href="#">Inicio</a></li>
      </ul>
    </nav>
  </div>

  <!--TITULO--> 
  <div style="text-align: center;">
  <label>COLABORADORES</label> 
</div>
<div style="text-align: center; margin-top: 2%; ">
  
    <button type="button" class="btn btn-primary btn-space" onclick="ventanaagregar()">Agregar</button> 
    <button type="button" class="btn btn-primary btn-space">Editar</button> 
    <button type="button" class="btn btn-primary btn-space">Eliminar</button> 
</div>
<div style="text-align: center;">

<!--TABLA COLABORADORES CON PHP-->

<table border="1" align="center" class="table-hover table-dark">
        <thead>
          <tr>
            <th scope="col" style="width: 10%">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Rol</th>
          </tr>
        </thead>
        <tbody>
        <?php 
		$sql="SELECT * from USUARIOS";
		$result=mysqli_query($con,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		<tr>
			<td><?php echo $mostrar['ID'] ?></td>
			<td><?php echo $mostrar['NOMBRE'] ?></td>
			<td><?php echo $mostrar['CORREO'] ?></td>
			<td><?php echo $mostrar['CONTRA'] ?></td>
			<td><?php echo $mostrar['ROL'] ?></td>
		</tr>
	<?php 
	}
	 ?>
</table>
</div>
<!--COLABORADORES-->

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script language=javascript>
    function ventanaagregar (){
      window.open("htmlpages/agregar.php",width="700",height="750",scrollbars="no",toolbar="no",resizable="no",menubar="no");
    }
    </script> 
</html>