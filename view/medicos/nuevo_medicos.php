<!DOCTYPE html>
<html>
<head>
	<title>Registro Medico</title>
	<link rel="stylesheet" type="text/css" href="./Bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./icono/css/material-icons.css">
  <style type="text/css"> div{ text-shadow: 1px 1px 2px black; color: blue;} </style>
</head>
<body background="img/registromedicos.jpg">

<div class="container" align="center">
<div class="container" style="margin-top: 10px;">
	<center><h1  style="text-align: center; font-family: arial;">Registro de Medicos</h1></center>
	<br>
		<form method="post" action="?c=Guardarmedicos">
<div class="row">
<div class="offset-2 col-md-4">
<td> Id</td>
<input class="form-control" type="text" placeholder="" name="id" required value="<?php echo $alm->id ?>" readonly >
<br>
<td > Nombre</td>
<input class="form-control alert alert-success" type="text" placeholder="" name="nombre" required value="<?php echo $alm->nombre ?>">
<br>
<td> Fecha Nacimiento</td>
<input class="form-control alert alert-success" type="date" placeholder="" name="fecha_nacimiento" required value="<?php echo $alm->fecha_nacimiento ?>">
</div>

<div class="col-md-4">
<td> Especialidad</td>
<input class="form-control alert alert-success" type="text" placeholder="" name="especialidad" required value="<?php echo $alm->especialidad ?>">
<br>
<td>Numero Junta </td>
<input class="form-control alert alert-success" type="text" placeholder="" name="numero_junta" required value="<?php echo $alm->numero_junta ?>">
<br>
<td>NIT </td>
<input class="form-control alert alert-success" type="text" placeholder="" name="NIT" required value="<?php echo $alm->NIT ?>">
</div>
</div><br>
<center>
<td >DUI </td>
<div class="col-md-4"><input class="form-control alert alert-success" type="text" placeholder="" name="DUI" required value="<?php echo $alm->DUI ?>">
</div></center><br>
<center>
<td></td>
</center>
<div class="card text-center" style="left: 40px;margin-bottom: 800px;right: -200px; top: 30px;margin-left: 400px;margin-right: 470px;">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="?c=index">inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?c=Medicos">Regresar</a>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>
  <div class="card-body" style="">
 
     <input type="submit" value="Registrar" class="btn bg-primary">
  </div>
</form>

</div>
</body>
</html>