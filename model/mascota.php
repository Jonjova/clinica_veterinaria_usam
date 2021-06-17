<?php 

class mascota{

	private $cnx;
	public $id;
	public $nombre;
	public $edad;
	public $sexo_mascota;
	public $tipo_mascota;

	public function __construct(){
		$this->cnx = conexion::conectar();
	}
	public function Mostrarmascota(){
		try {
			$sql = $this->cnx->prepare("SELECT m.id,m.nombre,m.edad,s.sexo_mascota,t.tipo_mascota FROM dbo_exmascota m inner join dbo_sexomascota s on m.sexo_mascota=s.id inner join dbo_tipomascota t on m.tipo_mascota = t.id");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	} 
	public function llenarsexomascota(){
		try {
			$sql = $this->cnx->prepare("SELECT * FROM dbo_sexomascota");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	} 
	public function llenartipomascota(){
		try {
			$sql = $this->cnx->prepare("SELECT * FROM dbo_tipomascota");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	} 
	public function llenarIdmascota($id){
        try{
            $stm = $this->cnx->prepare("select * from dbo_exmascota where id = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        }  catch (Exception $ex){
            die($ex->getMessage());
        }
    } 
     public function Registrarmascota(mascota $data){
        try{
            $this->cnx->prepare("insert into dbo_exmascota (nombre,edad,sexo_mascota,tipo_mascota) values (?,?,?,?)")
                    ->execute(array($data->nombre,
                                    $data->edad,
                                    $data->sexo_mascota,
                                    $data->tipo_mascota,
                                    ));
        }  catch (Exception $ex){
            die($ex->getMessage());
        }
    }
    public function Modificarmascota($data){
        try{
            $this->cnx->prepare("update dbo_exmascota set nombre=?,edad=?,sexo_mascota=?,tipo_mascota=?  where id=?")
                     ->execute(array($data->nombre,
                                    $data->edad,
                                    $data->sexo_mascota,
                                    $data->tipo_mascota,
                                	$data->id));
        }  catch (Exception $ex){
            die($ex->getMessage());
        }
    }
     public function Deletemascota($id){
        try{
            $this->cnx->prepare("delete from dbo_exmascota where id = ?")
                    ->execute(array($id));
        }  catch (Exception $ex){
            $ex->getMessage();
        }
    }
}

?>