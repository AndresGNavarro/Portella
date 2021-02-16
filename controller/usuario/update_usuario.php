<?php 
	
	require_once '../../model/usuario.php';
    $usuario = new Usuario();
    $usuario->set('pkusuario', $_POST['pkusuario'] );
    $usuario->set('pkperfil', $_POST['pkperfil']);
    $usuario->set('nombre', $_POST['nombre'] );
    $usuario->set('apellido_paterno', $_POST['apellido_paterno'] );
  	$usuario->set('apellido_materno', $_POST['apellido_materno'] );
  	$usuario->set('correo', $_POST['correo'] );
  	$usuario->set('nombre_usuario', $_POST['nombre_usuario'] );
  	$usuario->set('password', $_POST['password'] );
  	$usuario->set('tipo', $_POST['tipo'] );
  	$usuario->set('pkperfil', $_POST['pkperfil'] );
  	$usuario->set('estado', $_POST['estado'] );

	$respuesta = $usuario->updateUsuario();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/usuario/view_usuario.php?msg=2\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/usuario/view_usuario.php?msg=3\"</script>";
	}
	
	

?>