<?php
//en este apartado requerimos de nuestro modelo ("llamamos el modelo").
require_once 'model/modelo.php';
require_once 'model/mascota.php';
require_once 'model/medicos.php';
require_once 'model/cliente.php';

//aqui empesamos a controlar todo nuestro sistema.
class control{
	
	public $model;
	public $mascota;
	public $medicos;
	public $cliente;
	
	
//utilizamos el constructor para la jecucion de todas las evaluaciones
	public function __construct(){
		$this->model = new modelo();
		$this->mascota = new mascota();
		$this->medicos = new medicos();
		$this->cliente = new cliente();
		
// en este apartado tenemos todas las funciones de nuestras vistas  tambien para la ejecucion de las mismas.
	}
	public function Index(){
		include_once 'view/principal.php';
	}

	public function cita(){
		include_once 'view/cita/cita.php';
	}

	public function medicos(){
		include_once 'view/medicos/medicos.php';
	}
	public function mascotas(){
		include_once 'view/mascota/mascotas.php';
	}
	public function cliente(){
		include_once 'view/cliente/cliente.php';
	}
	
//aqui evaluamos (insertar, actualizar y eliminar los campos de cita) apartir de aqui todos las vistas pueden hacer todo eso.
	public function nuevo(){
		$alm = new modelo();
		if(isset($_REQUEST["id"])){
			$alm = $this->model->llenarId($_REQUEST["id"]);
		}
		include_once 'view/cita/nueva_cita.php';
	}
	public function Guardar(){
		$stm = new modelo();
		$stm->id = $_REQUEST["id"];
		$stm->Fecha_realizacion = $_REQUEST["Fecha_realizacion"];
		$stm->Fecha_consulta = $_REQUEST["Fecha_consulta"];
		$stm->medico = $_REQUEST["medico"];
		$stm->nombre_consultorio = $_REQUEST["nombre_consultorio"];
		$stm->tipo = $_REQUEST["tipo"];
		$stm->citaestado = $_REQUEST["citaestado"];

		$stm->id>0 ? $this->model->Modificar($stm) : $this->model->Registrar($stm);
        header("Location: index.php?c=cita");
	}

	public function Eliminar(){
		$this->model->Delete($_REQUEST["id"]);
		header("Location: index.php?c=cita"); 
	}
//Evaluamos Mascotas
	public function nuevomascota(){
		$alm = new mascota();
		if(isset($_REQUEST["id"])){
			$alm = $this->mascota->llenarIdmascota($_REQUEST["id"]);
		}
		include_once 'view/mascota/nueva_mascota.php';
	}
	public function Guardarmascota(){
		$stm = new mascota();
		$stm->id = $_REQUEST["id"];
		$stm->nombre = $_REQUEST["nombre"];
		$stm->edad = $_REQUEST["edad"];
		$stm->sexo_mascota = $_REQUEST["sexo_mascota"];
		$stm->tipo_mascota = $_REQUEST["tipo_mascota"];

		$stm->id>0 ? $this->mascota->Modificarmascota($stm) : $this->mascota->Registrarmascota($stm);
        header("Location: index.php?c=mascotas");
	}

	public function Eliminarmascota(){
		$this->mascota->Deletemascota($_REQUEST["id"]);
		header("Location: index.php?c=mascotas"); 
	}
	//Evaluamos Medicos
	public function nuevomedicos(){
		$alm = new medicos();
		if(isset($_REQUEST["id"])){
			$alm = $this->medicos->llenarIdmedicos($_REQUEST["id"]);
		}
		include_once 'view/medicos/nuevo_medicos.php';
	}
	public function Guardarmedicos(){
		$stm = new medicos();
		$stm->id = $_REQUEST["id"];
		$stm->nombre = $_REQUEST["nombre"];
		$stm->fecha_nacimiento = $_REQUEST["fecha_nacimiento"];
		$stm->especialidad = $_REQUEST["especialidad"];
		$stm->numero_junta = $_REQUEST["numero_junta"];
		$stm->NIT = $_REQUEST["NIT"];
		$stm->DUI = $_REQUEST["DUI"];

		$stm->id>0 ? $this->medicos->Modificarmedicos($stm) : $this->medicos->Registrarmedicos($stm);
        header("Location: index.php?c=medicos");
	}

	public function Eliminarmedicos(){
		$this->medicos->Deletemedico($_REQUEST["id"]);
		header("Location: index.php?c=medicos"); 
	}
	//evaluamos clientes
	public function nuevocliente(){
		$alm = new cliente();
		if(isset($_REQUEST["id"])){
			$alm = $this->cliente->llenarIdcliente($_REQUEST["id"]);
		}
		include_once 'view/cliente/nuevo_cliente.php';
	}
	public function Guardarcliente(){
		$stm = new cliente();
		$stm->id = $_REQUEST["id"];
		$stm->nombre = $_REQUEST["nombre"];
		$stm->fecha_nacimiento = $_REQUEST["fecha_nacimiento"];
		$stm->sexo = $_REQUEST["sexo"];
		$stm->direccion = $_REQUEST["direccion"];
		$stm->DUI = $_REQUEST["DUI"];
		$stm->contacto = $_REQUEST["contacto"];
		$stm->mascota_tiempotenencia = $_REQUEST["mascota_tiempotenencia"];

		$stm->id>0 ? $this->cliente->Modificarcliente($stm) : $this->cliente->Registrarcliente($stm);
        header("Location: index.php?c=cliente");
	}

	public function Eliminarcliente(){
		$this->cliente->Deletecliente($_REQUEST["id"]);
		header("Location: index.php?c=cliente"); 
	}

	//evaluamos consultorio
	public function nuevoconsultorio(){
		$alm = new consultorio();
		if(isset($_REQUEST["id"])){
			$alm = $this->consultorio->llenarIdconsultorio($_REQUEST["id"]);
		}
		include_once 'view/consultorio/nuevo_consultorio.php';
	}
	public function Guardarconsultorio(){
		$stm = new consultorio();
		$stm->id = $_REQUEST["id"];
	

		$stm->id>0 ? $this->consultorio->Modificarconsultorio($stm) : $this->consultorio->Registrarconsultorio($stm);
        header("Location: index.php?c=consultorio");
	}

	public function Eliminarconsultorio(){
		$this->cliente->Deleteconsultorio($_REQUEST["id"]);
		header("Location: index.php?c=consultorio"); 
	}
}

?>