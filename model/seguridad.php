<?php
	
	class Seguridad
	{
	 	private $pkusuario;
	 	private $email;	
		private $password;	
	 	
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

	 public function validar_usuario(){
	 
	 		$sql = "SELECT count(*) as total FROM usuario WHERE nombre_usuario = '{$this-> usuario}' and password ='{$this-> password}' and estado = 1 
	 			and (tipo = 0 or tipo = 2)";
	 		$datos2 = $this-> conn-> consultaRetorno($sql);
	 		$row = mysqli_fetch_assoc($datos2);
	 		$total = $row['total'];
	 		return $total;
	 		$this-> conn-> close();
	 	}

	 	public function selecnombreusuario(){
	 		$sql = "SELECT CONCAT(nombre,' ',apellido_paterno) AS nombre_usuario FROM usuario WHERE nombre_usuario = '{$this-> usuario}'";
	 		$datos2 = $this-> conn-> consultaRetorno($sql);
	 		$row = mysqli_fetch_assoc($datos2);
	 		$total = $row['nombre_usuario'];
	 		return $total;
	 		$this-> conn-> close();
	 	}


	 	public function selecpkusuario(){
	 		$sql = "SELECT pkusuario FROM usuario WHERE nombre_usuario = '{$this-> usuario}'";
	 		$datos2 = $this-> conn-> consultaRetorno($sql);
	 		$row = mysqli_fetch_assoc($datos2);
	 		$total = $row['pkusuario'];
	 		return $total;
	 		$this-> conn-> close();
	 	}


	 	public function selecpkperfil(){
	 		$sql = "SELECT fkperfil FROM usuario WHERE nombre_usuario = '{$this-> usuario}'";
	 		$datos2 = $this-> conn-> consultaRetorno($sql);
	 		$row = mysqli_fetch_assoc($datos2);
	 		$total = $row['fkperfil'];
	 		return $total;
	 		$this-> conn-> close();
	 	}

	 	public function addhistorial(){
	 		date_default_timezone_set("America/Monterrey");
			$fecha = date("Y-m-d");
			$hora = date('H:i:s');
			
	 		$sql = "INSERT INTO historial_usuario(
					    fkusuario,
					    actividad,
					    fecha_historial,
					    hora_historial
					)
					VALUES(
					'{$this -> pkusuario}',
					'{$this -> actividad}',
					'$fecha',
					'$hora'
					)";
	 		$datos = $this-> conn-> consultaRetorno($sql);
	 		return $datos;
	 		$this-> conn-> close();
	 	}

	 	

	 	
    public function almacen_menu(){
		$sql = "SELECT a.nombre, a.pkalmacen FROM usuario u INNER JOIN usuario_almacen s ON u.pkusuario=s.fkusuario INNER JOIN  almacen a ON a.pkalmacen=s.fkalmacen WHERE  s.estado=1 and pkusuario='{$this-> pkusuario}'";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function selectalmacen(){
	 		$sql = "SELECT nombre FROM almacen WHERE pkalmacen = '{$this-> pkalmacen}'";
	 		$datos2 = $this-> conn-> consultaRetorno($sql);
	 		$row = mysqli_fetch_assoc($datos2);
	 		$total = $row['nombre'];
	 		return $total;
	 		$this-> conn-> close();
	 	}


	 		public function validar_cliente()
	{
		$sql = "SELECT count(*) as total FROM contacto WHERE user = '{$this->usuario}' and pass = '{$this->password}' and estado = 1";
		$datos2 = $this->conn->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos2);
		$total = $row['total'];
		return $total;
		$this->conn->close();
	}



		//mostrar el nombre de usuario del cliente
	public function datosCliente(){
		$sql = "SELECT * FROM contacto WHERE user = '{$this->usuario}'";
		$datos = $this->conn->consultaRetorno($sql);
		return $datos;
		$this->conn-> close();
	}

	} 

?>