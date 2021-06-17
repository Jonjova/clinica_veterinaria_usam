<!DOCTYPE html>
<html >
<head>
	<title>Expediente cliente</title>
	<link rel="stylesheet" type="text/css" href="./Bootstrap/css/bootstrap.css">
  <style type="text/css"> div{ text-shadow: 1px 1px 2px black; } </style>
</head>
<body background="img/registrocliente.jpg" >
<center>	
<div class="container" >
<center><h1  style="text-align: center">Registro de Cliente</h1></center>
    <br>	
	<div class="container" style="margin-left: 85px;">
		<form method="post" action="?c=Guardarcliente">
<div class="row">
<div class="offset-2 col-md-6">
<td> Id</td>
<input class="form-control" type="text" placeholder="" name="id" required value="<?php echo $alm->id ?>" readonly >
<br>
<td> Nombre</td>
<input class="form-control" type="text" placeholder="" name="nombre" required value="<?php echo $alm->nombre ?>">
<br>
<td> Fecha de nacimiento</td>
<input class="form-control" type="date" placeholder="" name="fecha_nacimiento" required value="<?php echo $alm->fecha_nacimiento ?>">
<br>
<td> Sexo</td>
<input class="form-control" type="text" placeholder="" name="sexo" required value="<?php echo $alm->sexo ?>">

<td> Direccion</td>
<input class="form-control" type="text" placeholder="" name="direccion" required value="<?php echo $alm->direccion ?>">

<br>
<td> DUI</td>
<input class="form-control" type="text" placeholder="" name="DUI" required value="<?php echo $alm->DUI ?>">

<br>
<td> Contacto</td>
<input class="form-control" type="text" placeholder="" name="contacto" required value="<?php echo $alm->contacto ?>">

<br>
<td> Mascota Tiempo (tenencia)</td>
<input class="form-control" type="text" placeholder="" name="mascota_tiempotenencia" required value="<?php echo $alm->mascota_tiempotenencia ?>"><br>
<td></td>
</div>
<div class="card text-center" style="left: -350px;margin-bottom: 800px;right: -200px; top: 650px;"">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="?c=index">inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?c=cliente">Regresar</a>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>
  <div class="card-body" style="">
 
     <input type="submit" value="Registrar" class="btn  bg-primary text-white">
  </div>
</div>
<br>

</div>
</center>
<br>
<center></center>
</div>
</body>
</html>