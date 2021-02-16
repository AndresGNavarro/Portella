
<?php

class Impresora
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
	

	public function validarImpresora(){
		$sql = "SELECT count(*) as total FROM impresora WHERE nombre_impresora= '{$this->nombre_impresora}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		$total = $row['total'];
		return $total;
		$this-> conn-> close();
	}

	public function addImpresora(){
		
		$sql = "INSERT INTO impresora VALUES (NULL, '{$this->nombre_impresora}', '{$this->estado}')";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function viewImpresora(){
		$sql = "SELECT * FROM impresora 
		";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function viewImpresoraByPk(){
		$sql = "SELECT * FROM impresora WHERE pkimpresora = '{$this->pkimpresora}'
		";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function deleteImpresora(){ 
	 		
	 		$sql = "UPDATE impresora SET estado = 0 WHERE `pkimpresora` = '{$this->pkimpresora}' ";
	 		$datos = $this-> conn-> consultaRetorno($sql);
	 		return $datos;
	 		$this-> conn-> close();
	 		
	 	}

	public function updateImpresora(){
		$sql = "UPDATE impresora SET   nombre_impresora = '{$this->nombre_impresora}', estado = '{$this->estado}' WHERE pkimpresora = {$this->pkimpresora}";
		$datos = $this->conn->consultaRetorno($sql);
		return $datos;
		$this->conn->close();
	}



} 

?>