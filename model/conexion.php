<?php 
	class Conexion
	{
		
/*
		private $db_host = 'localhost'; 
    	private $db_user = ''; 
		private $db_pass = ''; 
        private $db_name = '';
     */    

		private $db_host = 'localhost'; 
    	private $db_user = 'root'; 
		private $db_pass = ''; 
        private $db_name = 'portelladb';    

        public  $conn;
		
		public function __construct()
		{


			$this-> conn = new mysqli($this-> db_host, $this-> db_user, $this-> db_pass, $this-> db_name);

			/* verificar la conexión */
			if (mysqli_connect_errno()) {
			  
			    exit();
			}		
			
		
			/* cambiar el conjunto de caracteres a utf8 */
			if (!$this-> conn->set_charset("utf8")) {
			 
			    exit();
			} 

		}

		public function consultaSimple($sql){
			$this-> conn-> query($sql);
		}
		public function consultaRetorno($sql){
			$datos = $this-> conn-> query($sql);
			return $datos;
		}
		public function cerrar(){
			$this-> conn-> close();
		}
	}

			
?>