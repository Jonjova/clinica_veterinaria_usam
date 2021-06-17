<!DOCTYPE html>
<html>
<head>
	<title>nueva cita</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./materialize/css/materialize.css">
	<style type="text/css">body{ margin-top: 30px; padding: 70px; margin-left: 150px; margin-right: 150px; } td{ font-size: 20px; font-family: Bonodi MT; }</style>
	<meta charset="utf-8">
</head>

    <body background="img/mosaicocita.jpg" height="1200">  
	<div class="container" style="margin-top: -80px;">
		<div class="row" align="center" style="opacity: 0.9">
			
			<div class="col m card blue-grey darken-1" ><h4 class="white-text">Registro de citas</h4></div>
			
		</div>
	<form method="post" action="?c=Guardar">
		<table class="table highlight " style="opacity: 0.9">
			<tr align="center">
				<td class="card blue-grey darken-1 white-text" style="text-align: center;">Id</td>
				<td><input type="text" name="id" value="<?php echo $alm->id ?>"></td>
			</tr>
			<tr>
				<td class="card blue-grey darken-1 white-text" style="text-align: center;">Fecha realizacion</td>
				<td><input type="date" name="Fecha_realizacion" value="<?php echo $alm->Fecha_realizacion ?>"></td>
			</tr>
			<tr>
				<td class="card blue-grey darken-1 white-text" style="text-align: center;">Fecha consulta</td>
				<td><input type="date" name="Fecha_consulta" value="<?php echo $alm->Fecha_consulta ?>"></td>
			</tr>
			<tr>
				<td class="card blue-grey darken-1 white-text" style="text-align: center;">Medico</td>
				<td> <select name="medico" class="browser-default">
                            <?php foreach ($this->model->llenarmedico() as $r): ?>
                            <option value="<?php echo $r->id ?>" <?php echo $r->id == $alm->medico ? 'selected' : ''  ?>><?php echo $r->medico ?></option>
                            <?php endforeach; ?>
                        </select></td>
			</tr>
			<tr>
				<td class="card blue-grey darken-1 white-text" style="text-align: center;">Nombre Consultorio</td>
				<td> <select name="nombre_consultorio" class="browser-default">
                            <?php foreach ($this->model->llenarnombreconsultorio() as $r): ?>
                            <option value="<?php echo $r->id ?>" <?php echo $r->id == $alm->nombre_consultorio ? 'selected' : ''  ?>><?php echo $r->nombre_consultorio ?></option>
                            <?php endforeach; ?>
                        </select></td>
			</tr>
			<tr>
				<td class="card blue-grey darken-1 white-text" style="text-align: center;">Tipo cita</td>
				<td> <select name="tipo" class="browser-default">
                            <?php foreach ($this->model->llenartipocita() as $r): ?>
                            <option value="<?php echo $r->id ?>" <?php echo $r->id == $alm->tipo ? 'selected' : ''  ?>><?php echo $r->tipo ?></option>
                            <?php endforeach; ?>
                        </select></td>
			</tr>
			<tr>
				<td class="card blue-grey darken-1 white-text" style="text-align: center;">Estado de Cita</td>
				<td> <select name="citaestado" class="browser-default">
                            <?php foreach ($this->model->llenarcitaestado() as $r): ?>
                            <option value="<?php echo $r->id ?>" <?php echo $r->id == $alm->citaestado ? 'selected' : ''  ?>><?php echo $r->citaestado ?></option>
                            <?php endforeach; ?>
                        </select></td>
			</tr>

			<tr>
				<td><input type="submit" name="" value="Guardar" class="btn bg-primary text-white"></td>
			</tr>
		</table>
	</form>
	
	<script type="text/javascript" src="./materialize/js/materialize.js"></script>
	<script type="text/javascript" >
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
	</script>
		</div>
</body>
</html>