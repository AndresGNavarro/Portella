
<?php

class Privilegio
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
	

	public function validarPrivilegio(){
		$sql = "SELECT count(*) as total FROM privilegio WHERE nombre= '{$this->nombre}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		$total = $row['total'];
		return $total;
		$this-> conn-> close();
	}

	public function addPrivilegio(){
		
		$sql = "INSERT INTO privilegio VALUES (NULL, '{$this->clave}', '{$this->nombre}', '{$this->estado}')";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function viewPrivilegio(){
		$sql = "SELECT * FROM privilegio 
		";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function viewPrivilegioByPk(){
		$sql = "SELECT * FROM privilegio WHERE pkprivilegio = '{$this->pkprivilegio}'
		";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function deletePrivilegio(){ 
	 		
	 		$sql = "UPDATE privilegio SET estado = 0 WHERE `pkprivilegio` = '{$this->pkprivilegio}' ";
	 		$datos = $this-> conn-> consultaRetorno($sql);
	 		return $datos;
	 		$this-> conn-> close();
	 		
	 	}

	public function updatePrivilegio(){
		$sql = "UPDATE privilegio SET   nombre = '{$this->nombre}', estado = '{$this->estado}' , clave = '{$this->clave}' WHERE pkprivilegio = {$this->pkprivilegio}";
		$datos = $this->conn->consultaRetorno($sql);
		return $datos;
		$this->conn->close();
	}



} 

?>