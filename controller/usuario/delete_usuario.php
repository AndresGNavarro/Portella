<?php 

	$pk_usuario=base64_decode($_GET['a']);
	require_once '../../model/usuario.php';
    $usuario = new Usuario();
    $usuario->set('pkusuario', $pk_usuario );
	$respuesta = $usuario->deleteUsuario();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/usuario/view_usuario.php?msg=4\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/usuario/view_usuario.php?msg=3\"</script>";
	}
	
	

?>