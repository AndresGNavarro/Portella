
<?php

class Origen
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
	

	public function validarOrigen(){
		$sql = "SELECT count(*) as total FROM origen WHERE origen= '{$this->origen}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		$total = $row['total'];
		return $total;
		$this-> conn-> close();
	}

	public function addOrigen(){
		
		$sql = "INSERT INTO origen VALUES (NULL, '{$this->origen}', '{$this->estado}')";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function viewOrigen(){
		$sql = "SELECT * FROM origen 
		";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function viewOrigenByPk(){
		$sql = "SELECT * FROM origen WHERE pkorigen = '{$this->pkorigen}'
		";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function deleteOrigen(){ 
	 		
	 		$sql = "UPDATE origen SET estado = 0 WHERE `pkorigen` = '{$this->pkorigen}' ";
	 		$datos = $this-> conn-> consultaRetorno($sql);
	 		return $datos;
	 		$this-> conn-> close();
	 		
	 	}

	public function updateOrigen(){
		$sql = "UPDATE origen SET   origen = '{$this->origen}', estado = '{$this->estado}' WHERE pkorigen = {$this->pkorigen}";
		$datos = $this->conn->consultaRetorno($sql);
		return $datos;
		$this->conn->close();
	}



} 

?>