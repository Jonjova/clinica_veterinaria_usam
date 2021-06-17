
<?php 

class medicos{

	private $cnx;
	public $id;
	public $nombre;
	public $fecha_nacimiento;
	public $especialidad;
	public $numero_junta;
	public $NIT;
	public $DUI;

	public function __construct(){
		$this->cnx = conexion::conectar();
	}
	public function Mostrarmedico(){
		try {
			$sql = $this->cnx->prepare("SELECT * FROM dbo_registromedico");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	} 
	
	public function llenarIdmedicos($id){
        try{
            $stm = $this->cnx->prepare("select * from dbo_registromedico where id = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        }  catch (Exception $ex){
            die($ex->getMessage());
        }
    } 
     public function Registrarmedicos(medicos $data){
        try{
            $this->cnx->prepare("insert into dbo_registromedico (nombre,fecha_nacimiento,especialidad,numero_junta,NIT,DUI) values (?,?,?,?,?,?)")
                    ->execute(array($data->nombre,
                                    $data->fecha_nacimiento,
                                    $data->especialidad,
                                    $data->numero_junta,
                                    $data->NIT,
                                    $data->DUI,
                                    ));
        }  catch (Exception $ex){
            die($ex->getMessage());
        }
    }
    public function Modificarmedicos($data){
        try{

            $this->cnx->prepare("update dbo_registromedico set nombre=?,fecha_nacimiento=?,especialidad=?,numero_junta=?,NIT=?,DUI=?  where id=?")
                     ->execute(array($data->nombre,
                                    $data->fecha_nacimiento,
                                    $data->especialidad,
                                    $data->numero_junta,
                                    $data->NIT,
                                    $data->DUI,
                                	$data->id));
        }  catch (Exception $ex){
            die($ex->getMessage());
        }
    }
     public function Deletemedico($id){
        try{
            $this->cnx->prepare("delete from dbo_registromedico where id = ?")
                    ->execute(array($id));
        }  catch (Exception $ex){
            $ex->getMessage();
        }
    }
}

?> 

