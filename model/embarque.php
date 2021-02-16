
<?php

class Embarque
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
	



	public function viewEmbarque(){
		$sql = "SELECT a.pksalida, a.folio, a.folio_completo, a.pedimento, a.factura, a.fecha,a.hora, a.fecha_pedimento, b.nombre_usuario FROM salida a 
		INNER JOIN usuario b ON b.pkusuario=a.fkusuario 
		";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	public function viewEmbarqueByPk(){
		$sql = "SELECT a.pkembarque, a.folio, a.folio_completo, a.pedimento, a.factura, a.fecha, a.fecha_factura, b.nombre_usuario FROM entrada a 
		INNER JOIN usuario b ON b.pkusuario=a.fkusuario WHERE a.pkentrada = '{$this->pkentrada}'
		";
		$datos = $this-> conn-> consultaRetorno($sql);
		return $datos;
		$this-> conn-> close();
	}

	

	public function updateEmbarque(){
		$sql = "UPDATE producto SET  no_parte = '{$this->no_parte}', descripcion = '{$this->descripcion}', estado = '{$this->estado}', fkorigen = '{$this->pkorigen}' WHERE pkproducto = {$this->pkproducto}";
		$datos = $this->conn->consultaRetorno($sql);
		return $datos;
		$this->conn->close();
	}



} 

?>