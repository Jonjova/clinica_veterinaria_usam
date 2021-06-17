<!DOCTYPE html>
<html>
<head>
	<title>Registro mascota</title>
	<link rel="stylesheet" type="text/css" href="./Bootstrap/css/bootstrap.css">
	<style type="text/css"> div{ text-shadow: 1px 1px 2px black; color: gold; font-size: 20px;} </style>
</head>
<body background="img/registromascotas.jpg">

<div class="container">
	<center><h1  style="text-align: center">Registro mascota</h1></center>
    <br>
	<div class="container" >
		<form method="post" action="?c=Guardarmascota">
      <div class="row">
        <div class="offset-2 col-md-4">
          <td> Id</td>
          <input class="form-control alert alert-success " type="text" placeholder="" name="id" required value="<?php echo $alm->id ?>" readonly >
          <br>
          <td> Nombre</td>
          <input class="form-control alert alert-success" type="text" placeholder="" name="nombre" required value="<?php echo $alm->nombre ?>">
          <br>
          <td> Edad</td>
          <input class="form-control alert alert-success" type="text" placeholder="" name="edad" required value="<?php echo $alm->edad ?>">
          </div>

          <div class="col-md-4">
          <td> Sexo de mascota</td>
          <td> <select name="sexo_mascota" class="form-control ">
           <?php foreach ($this->mascota->llenarsexomascota() as $r): ?>
                                      <option value="<?php echo $r->id ?>" <?php echo $r->id == $alm->sexo_mascota ? 'selected' : ''  ?>><?php echo $r->sexo_mascota ?></option>
                                      <?php endforeach; ?>
                                  </select></td>
          <br>
          <td> Tipo Mascota</td>
          <td> <select name="tipo_mascota" class="form-control ">
                                      <?php foreach ($this->mascota->llenartipomascota() as $r): ?>
                                      <option value="<?php echo $r->id ?>" <?php echo $r->id == $alm->tipo_mascota ? 'selected' : ''  ?>><?php echo $r->tipo_mascota ?></option>
                                      <?php endforeach; ?>
                                  </select></td>

          <br>
          <td><input type="submit" value="Registrar" class="btn bg-primary text-white" style="margin-left: 40px;"></td>
          <div class="card-header">
              <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="?c=index">inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?c=mascotas">Regresar</a>
                </li>
                <li class="nav-item">
                </li>
              </ul>
            </div>
        </div>
      </div>
</form>

</div>
</body>
</html>