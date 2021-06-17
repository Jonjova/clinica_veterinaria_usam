<!DOCTYPE html>
<html>
<head>
	<title>mascotas</title>
	<link rel="stylesheet" type="text/css" href="./materialize/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="./icono/css/material-icons.css">
</head>
<body background="img/huellas.jpg">
<nav class="blue">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center">Registro de Mascotas</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="?c=Index" ><img src="img/iconos/home.png" align="center"></a></a></li>
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
	<form method="post" action="?c=mascotas">
		<table border="1" width="100%" class="table highlight grey"  id="datos">
				<tr class="card black white-text">
					<td>Id</td>
					<td>Nombre</td>
					<td>Edad</td>
					<td>Sexo Mascota</td>
					<td>Tipo mascota</td>
					<td>Actualizar</td>
					<td>Eliminar</td>
				</tr>
					<?php foreach ($this->mascota->Mostrarmascota() as $r): ?>		
				<tr align="center">
					<td><?php echo $r->id?></td>
					<td><?php echo $r->nombre?></td>
					<td><?php echo $r->edad?></td>
					<td><?php echo $r->sexo_mascota?></td>
					<td><?php echo $r->tipo_mascota?></td>
					<td><a href="?c=nuevomascota&id=<?php echo $r->id; ?>" ><img src="img/iconos/actualizar.png" ></a></td>
					<td> <a href="?c=Eliminarmascota&id=<?php echo $r->id; ?>"><img src="img/iconos/eliminar.png" ></a></td>
				</tr>
				<?php endforeach ?>
			</table>
	</form>
	<br>
	<a href="?c=nuevomascota" ><img src="img/iconos/medical-registro.png" style="position: absolute;  left: 120px;"><br><br><br><h4 class="btn">Nuevo Registro de mascota</h4></a>
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