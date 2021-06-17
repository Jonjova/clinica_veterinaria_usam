<?php 

class  cliente{
	private $cnx;
	public $id;
	public $nombre;
	public $calle;
	public $fecha_nacimiento;
	public $sexo;
	public $direccion;
	public $DUI;
	public $contacto;
	public $mascota_tiempotenencia;

	public function __construct(){
		$this->cnx = conexion::conectar();
	}
	public function mostrarcliente(){
		try {
			$sql = $this->cnx->prepare("select * from dbo_excliente");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ); 
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function llenarIdcliente($id){
        try{
            $stm = $this->cnx->prepare("select * from dbo_excliente where id = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        }  catch (Exception $ex){
            die($ex->getMessage());
        }
    }
     public function Registrarcliente(cliente $data){
        try{
            $this->cnx->prepare("insert into dbo_excliente (nombre,fecha_nacimiento,sexo,direccion,DUI,contacto,mascota_tiempotenencia) values (?,?,?,?,?,?,?)")
                    ->execute(array($data->nombre,
                                    $data->fecha_nacimiento,
                                    $data->sexo,
                                    $data->direccion,
                                    $data->DUI,
                                    $data->contacto,
                                    $data->mascota_tiempotenencia,
                                    ));
        }  catch (Exception $ex){
            die($ex->getMessage());
        }
    }
    public function Modificarcliente($data){
        try{
            $this->cnx->prepare("update dbo_excliente set nombre=?,fecha_nacimiento=?,sexo=?,direccion=?,DUI=?,contacto=?,mascota_tiempotenencia=?  where id=?")
                     ->execute(array($data->nombre,
                                     $data->fecha_nacimiento,
                                    $data->sexo,
                                    $data->direccion,
                                    $data->DUI,
                                    $data->contacto,
                                    $data->mascota_tiempotenencia,
                                    $data->id));
        }  catch (Exception $ex){
            die($ex->getMessage());
        }
    }
     public function Deletecliente($id){
        try{
            $this->cnx->prepare("delete from dbo_excliente where id = ?")
                    ->execute(array($id));
        }  catch (Exception $ex){
            $ex->getMessage();
        }
    } 
}
?>