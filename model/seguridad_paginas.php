<?php
setlocale(LC_TIME, "spanish");
setlocale(LC_TIME, 'es_ES.UTF-8');
date_default_timezone_set('America/Monterrey');	
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: ../../../index.php'); 
  exit();
}else{
    $usuario = $_SESSION['usuario'];
    require_once 'seguridad.php';
	$seguridad = new Seguridad();
	$seguridad->set('usuario', $usuario);
	$nombreusuario = $seguridad->selecnombreusuario();
	$pkusuario = $seguridad->selecpkusuario();
	$pkperfil = $seguridad->selecpkperfil();
	date_default_timezone_set('America/Monterrey');	

}
?>