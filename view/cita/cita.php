<!DOCTYPE html>
<html>
<head>
	<title>cita</title>
	<link rel="stylesheet" type="text/css" href="./materialize/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="./icono/css/material-icons.css">
</head>
<body background="img/cita.jpg">
	<nav class="blue">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center">Cita Veterinaria</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="?c=Index" ><img src="img/iconos/home.png" align="center"></a></li>
        <li><a href="badges.html"></a></li>
        <li ><a href="collapsible.html"></a></li>
      </ul>
    </div>
  </nav>
	<div class="container ">
  <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12" >
          <i class="material-icons prefix" >search</i>
          <input type="text"  class="autocomplete" id="searchTerm" type="text" onkeyup="doSearch()">
          <label for="searchTerm">Buscar</label>
        </div>
      </div>
    </div>
  </div>
  </div>
	<br>
	<div style="align-content: center;margin-left: 12px;margin-right: 12px; opacity: 0.8;" >
	<form method="post" action="?c=cita">
	<table border="1" width="100%" class="table highlight grey" id="datos">
		<tr class="card black white-text" >
			<th >Id</th>
			<th>Fecha realizacion</th>
			<th>Fecha consulta</th>
			<th>Medico</th>
			<th>Consultorio</th>
			<th>Tipo Cita</th>
			<th>Estado de cita</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
		</tr>
		<?php foreach ($this->model->Mostrar() as $r): ?>					
		<tr>
			<td class="card blue white-text"><?php echo $r->id?></td>
			<td><?php echo $r->Fecha_realizacion?></td>
			<td><?php echo $r->Fecha_consulta?></td>
			<td><?php echo $r->medico?></td>
			<td><?php echo $r->nombre_consultorio?></td>
			<td><?php echo $r->tipo?></td>
			<td><?php echo $r->citaestado?></td>
			<td><a href="?c=nuevo&id=<?php echo $r->id; ?>" ><img src="img/iconos/actualizar.png" ></a></td>
			<td> <a href="?c=Eliminar&id=<?php echo $r->id; ?>" ><img src="img/iconos/eliminar.png" ></a></td>
		</tr>
		<?php endforeach ?>

	</table>
	</form>
	<br>
	<a href="?c=nuevo" ><img src="img/iconos/medical-registro.png" style="position: absolute;  left: 50px;"><br><br><br><h4 class="btn">Nueva Cita</h4></a>
	</div>

		  <script type="text/javascript" src="./materialize/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="./materialize/js/materialize.js"></script>
  <script type="text/javascript" src="./materialize/js/busqueda.js"></script>
  <script type="text/javascript">
  	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
        
  </script>
</body>
</html>