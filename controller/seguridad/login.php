<?php
require_once '../../model/seguridad.php';
$modelo = new Seguridad();
$usuario = $_POST['usuario'];
$password = $_POST['pass'];

if ($usuario == null || $password == null)
{
    echo"<script>window.location.href=\"../../index.php?msg=1\"</script>";
}else{

	$modelo->set('usuario',  $usuario);
	$modelo->set('password', $password);
	$respuesta = $modelo->validar_usuario();


	if($respuesta != "0"){
	 	session_start();
	    $_SESSION['usuario'] = $usuario;

	    echo"<script>window.location.href=\"../../view/pc/inicio/index.php\"</script>";
	}else{
		//usuario o contraseña incorrecto
	    echo"<script>window.location.href=\"../../index.php?msg=0\"</script>";
	}

}


?>