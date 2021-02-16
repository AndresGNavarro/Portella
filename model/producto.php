
<?php

class Producto
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
	


	public function comboProductoOrigen(){
		$sql = "SELECT * FROM origen";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function validarNoParte(){
		$sql = "SELECT count(*) as total FROM producto WHERE no_parte= '{$this->no_parte}' ";
		$datos = $this-> conn-> consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		$total = $row['total'];
		return $total;
		$this-> conn-> close();
	}

	public function addProducto(){
		
		$sql = "INSERT INTO producto VALUES (NULL, '{$this->pkorigen}', '{$this->no_parte}', '{$this->descripcion}', '{$this->datoadicional1}', '{$this->datoadicional2}', '{$this->datoadicional3}', '{$this->estado}')";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function viewProducto(){
		$sql = "SELECT a.pkproducto, a.no_parte, a.descripcion, a.dato_adicional1, a.dato_adicional2, a.dato_adicional3, a.estado, b.origen FROM producto a 
		INNER JOIN origen b ON b.pkorigen=a.fkorigen 
		";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function viewProductoByPk(){
		$sql = "SELECT a.pkproducto, a.no_parte, a.descripcion, a.dato_adicional1, a.dato_adicional2, a.dato_adicional3, a.estado, b.origen, b.pkorigen FROM producto a 
		INNER JOIN origen b ON b.pkorigen=a.fkorigen WHERE a.pkproducto = '{$this->pkproducto}'
		";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function deleteProducto(){ 
	 		
	 		$sql = "UPDATE producto SET estado = 0 WHERE `pkproducto` = '{$this->pkproducto}' ";
	 		$datos = $this-> conn-> consultaRetorno($sql);
	 		return $datos;
	 		$this-> conn-> close();
	 		
	 	}

	public function updateProducto(){
		$sql = "UPDATE producto SET  no_parte = '{$this->no_parte}', descripcion = '{$this->descripcion}', dato_adicional1 = '{$this->datoadicional1}', dato_adicional2 = '{$this->datoadicional2}', dato_adicional3 = '{$this->datoadicional3}', estado = '{$this->estado}', fkorigen = '{$this->pkorigen}' WHERE pkproducto = {$this->pkproducto}";
		$datos = $this->conn->consultaRetorno($sql);
		return $datos;
		$this->conn->close();
	}



} 

?>