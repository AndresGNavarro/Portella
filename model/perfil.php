
<?php

class Perfil
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
	

	public function validarPerfil(){
		$sql = "SELECT count(*) as total FROM perfil WHERE nombre_perfil= '{$this->nombre_perfil}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		$total = $row['total'];
		return $total;
		$this-> conn-> close();
	}

	

	//se inserta el usuario a la tabla de usuario, esta es la función. Se pasan los valores que estan exactamente en la bd
	public function addPerfil(){
		$sql = "INSERT INTO perfil VALUES (NULL,  '{$this->nombre_perfil}',  1)";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}



	//lista todos los registros que han sido insertados en la bd
	public function viewPerfil(){
		$sql = "SELECT * FROM perfil";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function viewPerfilByPk(){
		$sql = "SELECT * FROM perfil WHERE pkperfil='{$this->pkperfil}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function deletePerfil(){
		$sql = "UPDATE `perfil` SET  estado= 0 WHERE pkperfil='{$this->pkperfil}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}


	public function updatePerfil(){
		$sql = "UPDATE `perfil` SET estado='{$this-> estado}', nombre_perfil = '{$this-> nombre_perfil}' WHERE pkperfil = '{$this-> pkperfil}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}


	public function updateInactive(){
		$sql = "UPDATE `perfil` SET  estado='{$this -> cambiar}' WHERE pkperfil='{$this-> pkperfil}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}


	public function combo_privilegio(){
		$sql = "SELECT * FROM privilegio WHERE estado=1";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function combo_perfil(){
		$sql = "SELECT * FROM perfil WHERE estado=1";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}


public function combo_perfil_cliente(){
		$sql = "SELECT * FROM perfil WHERE estado=1 and tipo=1";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}
	public function validar_detalle(){
		$sql = "SELECT * FROM detalle_perfil WHERE fkperfil= '{$this-> pkperfil}'  and fkprivilegio= '{$this-> pkprivilegio}'";
		$datos = $this-> conn-> consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		return $row;
		$this-> conn-> close();
	}

	

	
	public function add_detalle(){
		$sql = "INSERT INTO detalle_perfil VALUES (NULL, '{$this-> pkperfil}',  '{$this-> pkprivilegio}')";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}



	//lista todos los registros que han sido insertados en la bd
	public function view_detalle(){
		$sql = "SELECT * FROM detalle_perfil d LEFT JOIN privilegio p ON d.fkprivilegio=p.pkprivilegio WHERE d.fkperfil='{$this-> pkperfil}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function delete_detalle(){
		$sql = "DELETE FROM detalle_perfil WHERE pkdetalle_perfil='{$this-> pkdetalle_perfil}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function privUser(){
		$sql = "SELECT pv.*
				FROM detalle_perfil dp
				INNER JOIN perfil p ON dp.fkperfil = p.pkperfil
				INNER JOIN privilegio pv ON dp.fkprivilegio = pv.pkprivilegio
				WHERE pv.estado = 1 AND dp.fkperfil = {$this->fkperfil}";
		$datos = $this->conn->consultaRetorno($sql);
		return $datos;
		$this->conn->close();
	}


} 

?>