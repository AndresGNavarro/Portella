
<?php

class Job
{


	function __construct()
	{
		require_once 'conexion.php';
		$this-> conn = new Conexion();
	}

	public function set($atributo, $contenido){
		$this->$atributo = $contenido;
	}

	public function get($atributo){
		return $this-> $atributo;
	}
	

	public function validarJob(){
		$sql = "SELECT count(*) as total FROM job WHERE job= '{$this->job}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		$total = $row['total'];
		return $total;
		$this-> conn-> close();
	}

	public function addJob(){
		
		$sql = "INSERT INTO job VALUES (NULL, '{$this->job}', '{$this->estado}')";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function viewJob(){
		$sql = "SELECT * FROM job 
		";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function viewJobByPk(){
		$sql = "SELECT * FROM job WHERE pkjob = '{$this->pkjob}'
		";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function deleteJob(){ 
	 		
	 		$sql = "UPDATE job SET estado = 0 WHERE `pkjob` = '{$this->pkjob}' ";
	 		$datos = $this-> conn-> consultaRetorno($sql);
	 		return $datos;
	 		$this-> conn-> close();
	 		
	 	}

	public function updateJob(){
		$sql = "UPDATE job SET   job = '{$this->job}', estado = '{$this->estado}' WHERE pkjob = {$this->pkjob}";
		$datos = $this->conn->consultaRetorno($sql);
		return $datos;
		$this->conn->close();
	}



} 

?>