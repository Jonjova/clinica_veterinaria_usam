<!DOCTYPE html>
<html>
<head>
	<title>cliente</title>
</head>
<body background="img/clienteveterinaria.jpg">
	<link rel="stylesheet" type="text/css" href="./materialize/css/materialize.css">
<link rel="stylesheet" type="text/css" href="./icono/css/material-icons.css">

<nav class="blue">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center">Registro de clientes</a>
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
	<form method="post" action="?c=cliente">
	<table border="1" width="100%" class="table highlight grey" id="datos" >
		<tr class="card black white-text">
			<th >Id</th>
			<th>nombre</th>
			<th>Fecha Nacimiento</th>
			<th>Sexo</th>
			<th>Direccion</th>
			<th>DUI</th>
			<th>Contacto</th>
			<th>Mascota Tiempo(tenencia)</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
		</tr>
		<?php foreach ($this->cliente->Mostrarcliente() as $r): ?>					
		<tr >
			<td class="card blue white-text"><?php echo $r->id?></td>
			<td><?php echo $r->nombre?></td>
			
			<td><?php echo $r->fecha_nacimiento?></td>
			<td><?php echo $r->sexo?></td>
			<td><?php echo $r->direccion?></td>
			<td><?php echo $r->DUI?></td>
			<td><?php echo $r->contacto?></td>
			<td style="text-align: center"><?php echo $r->mascota_tiempotenencia?></td>
			<td><a href="?c=nuevocliente&id=<?php echo $r->id; ?>" class="btn">Actualizar</a></td>
			<td> <a href="?c=Eliminarcliente&id=<?php echo $r->id; ?>" class="btn">Eliminar</a></td>
		</tr>
		<?php endforeach ?>

	</table>
	</form>
	<br>
	<a href="?c=nuevocliente" ><img src="img/iconos/medical-registro.png" style="position: absolute;  left: 70px;"><br><br><br><h4 class="btn">Nuevo Registro</h4></a>
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
 
</html>