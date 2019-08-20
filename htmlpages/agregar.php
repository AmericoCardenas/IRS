<!DOCTYPE html>
<html>
    <head>
        <title>Agregar Colaboradores | IRS</title>
        <link href="../css/agregar.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body style="background-color: blue;">
<!--FORMATO PARA AGREGAR COLABORADORES-->  
<div class="box" style="text-align: center;">
<img src="../img/irs.png" width="150" height="50">
<!--FORM METHOD POST-->
<form method="POST" action="../phplogic/agregarbd.php">
<!--NOMBRE-->
<div style="padding-top: 5%;">
<label>Nombre: </label>
<input type="text" name="nombre">
</div>
<!--CORREO-->
<div style="padding-top: 5%; margin-left: 2%;">
<label>Correo: </label>
<input type="text" name="correo">
</div>
<!--CONTRASEÑA-->
<div style="padding-top: 5%; margin-right: 6%;">
<label>Contraseña: </label>
<input type="password" name="contra">
</div>
<!--ROL-->
<div style="padding-top: 5%;">
<label>ROL: </label>
<select name="rol">
<option value="ADMIN">ADMIN</option>
<option value="COLABORADOR">COLABORADOR</option>
</select>
</div>
<!--BOTONES-->
<div style="padding-top: 5%; margin-left: 6%;">
<button class="btn btn-primary btn-space" type="submit">Aceptar</button>
</form>
<!--FORM METHOD POST-->
<button type="button" class="btn btn-primary btn-space">Cancelar</button>
</div>
</div>
</body>
</html>