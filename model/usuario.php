
<?php

class Usuario
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
	
	 //se valida que no haya usuarios repetidos por eso se hace una comparación con el nombre igual a como esta en la bd
	public function validar(){
		$sql = "SELECT * FROM usuario WHERE nombre= '{$this-> nombre}' and apellido_paterno= '{$this-> apellido_paterno}'   or nombre_usuario= '{$this-> nombre_usuario}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		return $row;
		$this-> conn-> close();
	}

	

	//se inserta el usuario a la tabla de usuario, esta es la función. Se pasan los valores que estan exactamente en la bd
	public function add(){
		//echo 'INSERT INTO empresa VALUES (NULL, '.$this-> razon_social.', '.$this-> rfc.','.$this-> direccion.', '.$this-> cp.', '.$this-> telefono.', '.$this-> pkciudad.', '.$this-> logo.', 1)';
		$sql = "INSERT INTO usuario VALUES (NULL, '{$this-> pkperfil}',  '{$this-> nombre}', '{$this-> apellido_paterno}', '{$this-> apellido_materno}', '{$this-> nombre_usuario}', '{$this-> password}', '{$this-> correo}', '{$this-> tipo}',  '{$this-> estado}')";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}



	//lista todos los registros que han sido insertados en la bd
	public function viewUsuario(){
		$sql = "SELECT u.*, p.nombre_perfil FROM usuario u LEFT JOIN perfil p ON p.pkperfil=u.fkperfil ";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function viewUsuarioByPk(){
		$sql = "SELECT u.*, p.nombre_perfil, p.pkperfil FROM usuario u LEFT JOIN perfil p ON p.pkperfil=u.fkperfil  WHERE pkusuario='{$this-> pkusuario}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}


	public function updateUsuario(){
		$sql = "UPDATE usuario SET nombre = '{$this-> nombre}', apellido_paterno = '{$this-> apellido_paterno}' , apellido_materno = '{$this-> apellido_materno}',  password = '{$this-> password}', correo = '{$this-> correo}', tipo = '{$this-> tipo}', fkperfil = '{$this-> pkperfil}' , nombre_usuario = '{$this-> nombre_usuario}' , estado = '{$this-> estado}' WHERE pkusuario = '{$this-> pkusuario}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}


	public function deleteUsuario(){
		$sql = "UPDATE `usuario` SET  estado= 0 WHERE pkusuario='{$this-> pkusuario}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}





public function combo_almacen(){
		$sql = "SELECT * FROM `almacen`";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}



	public function updateInactiveUbicacion(){
		$sql = "UPDATE usuario_almacen SET  estado='{$this -> cambiar}' WHERE pkusuario_almacen='{$this-> pkusuario_ubicacion}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}


	public function view_detalle(){
		$sql = "SELECT b.nombre, u.* FROM usuario_almacen u LEFT JOIN almacen b ON u.fkalmacen=b.pkalmacen   WHERE fkusuario='{$this-> pkusuario}'";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

 

   public function validar_detalle(){
		$sql = "SELECT * FROM usuario_almacen WHERE fkusuario= '{$this-> pkusuario}' and fkalmacen= '{$this-> pkubicacion}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		return $row;
		$this-> conn-> close();
	}

	

	//se inserta el usuario a la tabla de usuario, esta es la función. Se pasan los valores que estan exactamente en la bd
	public function add_detalle(){
		$sql = "INSERT INTO usuario_almacen VALUES (NULL, '{$this-> pkusuario}', '{$this-> pkubicacion}', 1)";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}


















	public function validar_empresa(){
		$sql = "SELECT * FROM usuario_empresa   WHERE fkempresa= '{$this-> pkempresa}' and fkusuario= '{$this-> pkusuario}' 	 ";
		$datos = $this-> conn-> consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		return $row;
		$this-> conn-> close();
	}

	

	//se inserta el usuario a la tabla de usuario, esta es la función. Se pasan los valores que estan exactamente en la bd
	public function add_empresa(){
		//echo 'INSERT INTO empresa VALUES (NULL, '.$this-> razon_social.', '.$this-> rfc.','.$this-> direccion.', '.$this-> cp.', '.$this-> telefono.', '.$this-> pkciudad.', '.$this-> logo.', 1)';
		$sql = "INSERT INTO usuario_empresa VALUES (NULL, '{$this-> pkusuario}', '{$this-> pkempresa}', 1)";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}







	public function id_usuarios(){
		$sql = "SELECT max(pkusuario) AS maximo, min(pkusuario) AS minimo FROM usuario ";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}







	






} 

?>