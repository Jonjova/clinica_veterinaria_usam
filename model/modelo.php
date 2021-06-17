<?php  

class modelo{
	private $cnx;
	public $id;
	public $Fecha_realizacion;
	public $Fecha_consulta;
	public $medico;
	public $nombre_consultorio;
	public $tipo;
	public $citaestado;

	public function __construct(){
		$this->cnx = conexion::conectar();
	}

	public function Mostrar(){
		try {
			$sql = $this->cnx->prepare("SELECT c.id, c.Fecha_realizacion, c.Fecha_consulta,m.medico,p.nombre_consultorio,a.tipo,e.Estado from dbo_cita c INNER JOIN dbo_medico m on c.medico = m.id INNER join dbo_consultorio p on c.nombre_consultorio= p.id inner join dbo_tipocita a on c.tipo= a.id inner JOIN dbo_citaestado e on c.citaestado=e.id ORDER BY id");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	} 
	public function llenarmedico(){
		try {
			$sql = $this->cnx->prepare("SELECT * FROM dbo_medico ");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	} 
	public function llenarnombreconsultorio(){
		try {
			$sql = $this->cnx->prepare("SELECT * FROM dbo_consultorio ");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function llenartipocita(){
		try {
			$sql = $this->cnx->prepare("SELECT * FROM dbo_tipocita ");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	} 
	public function llenarcitaestado(){
		try {
			$sql = $this->cnx->prepare("SELECT * FROM dbo_citaestado ");
			$sql->execute();
			return $sql->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	} 
	 public function llenarId($id){
        try{
            $stm = $this->cnx->prepare("select * from dbo_cita where id = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        }  catch (Exception $ex){
            die($ex->getMessage());
        }
    } 
    public function Registrar(modelo $data){
        try{
            $this->cnx->prepare("insert into dbo_cita (Fecha_realizacion,Fecha_consulta,medico,nombre_consultorio,tipo,citaestado) values (?,?,?,?,?,?)")
                    ->execute(array($data->Fecha_realizacion,
                                    $data->Fecha_consulta,
                                    $data->medico,
                                    $data->nombre_consultorio,
                                    $data->tipo,
                                	$data->citaestado));
        }  catch (Exception $ex){
            die($ex->getMessage());
        }
    }
     public function Modificar($data){
        try{
            $this->cnx->prepare("update dbo_cita set Fecha_realizacion=?, Fecha_consulta=?, medico=?, nombre_consultorio=?, tipo=?, citaestado=? where id=?")
                     ->execute(array($data->Fecha_realizacion,
                                    $data->Fecha_consulta,
                                    $data->medico,
                                    $data->nombre_consultorio,
                                    $data->tipo,
                                    $data->citaestado,
                                	$data->id));
        }  catch (Exception $ex){
            die($ex->getMessage());
        }
    }
    public function Delete($id){
        try{
            $this->cnx->prepare("delete from dbo_cita where id = ?")
                    ->execute(array($id));
        }  catch (Exception $ex){
            $ex->getMessage();
        }
    }
}

?>