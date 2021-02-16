<?php 
//seleccionar ls privilegios que corresponden al perfil
require_once '../../../model/perfil.php';
$modPerfil = new Perfil();

$modPerfil->set('fkperfil', $pkperfil);
$result = $modPerfil->privUser();

//Declarar opciones del menu

//ENTRADAS
$MODULO_ENTRADAS = "none"; //listo
$AGREGAR_ENTRADAS = "none"; //listo
$LISTAR_ENTRADAS = "none"; //listo

//EMBARQUES
$MODULO_EMBARQUES = "none"; //listo 
$AGREGAR_EMBARQUES = "none"; //listo
$LISTAR_EMBARQUES = "none"; //listo

//PRODUCTOS
$MODULO_PRODUCTOS = "none"; //listo
$AGREGAR_PRODUCTOS = "none"; //listo

//ORIGENES
$MODULO_ORIGENES = "none"; //listo
$AGREGAR_ORIGENES = "none"; //listo

//IMPRESORAS
$MODULO_IMPRESORAS = "none"; //listo
$AGREGAR_IMPRESORAS = "none"; //listo

//JOBS
$MODULO_JOBS = "none"; //listo
$AGREGAR_JOBS = "none"; //listo

//PERFILES
$MODULO_PERFILES = "none"; //listo
$AGREGAR_PERFILES = "none"; //listo

//USUARIOS
$MODULO_USUARIOS = "none"; //listo 
$AGREGAR_USUARIOS = "none"; //listo
$LISTAR_USUARIOS = "none"; //listo

//PRIVILEGIOS
$MODULO_PRIVILEGIOS = "none"; //listo
$AGREGAR_PRIVILEGIOS = "none"; //listo

while ($row = mysqli_fetch_assoc($result)) {
	$privilegio = $row['nombre'];

	//ENTRADAS
	if ($privilegio == 'MODULO ENTRADAS') {$MODULO_ENTRADAS = 'block'; $AGREGAR_ENTRADAS = 'block'; $LISTAR_ENTRADAS = 'block';}
	if ($privilegio == 'AGREGAR ENTRADAS') {$MODULO_ENTRADAS = 'block'; $AGREGAR_ENTRADAS = 'block'; }
	if ($privilegio == 'LISTAR ENTRADAS') {$MODULO_ENTRADAS = 'block'; $LISTAR_ENTRADAS = 'block'; }
	//EMBARQUES
	if ($privilegio == 'MODULO EMBARQUES') {$MODULO_EMBARQUES = 'block'; $AGREGAR_EMBARQUES = 'block'; $LISTAR_EMBARQUES = 'block';}
	if ($privilegio == 'AGREGAR EMBARQUES') {$MODULO_EMBARQUES = 'block'; $AGREGAR_EMBARQUES = 'block'; }
	if ($privilegio == 'LISTAR EMBARQUES') {$MODULO_EMBARQUES = 'block'; $LISTAR_EMBARQUES = 'block'; }
	//USUARIOS
	if ($privilegio == 'MODULO USUARIOS') {$MODULO_USUARIOS = 'block'; $AGREGAR_USUARIOS = 'block'; $LISTAR_USUARIOS = 'block';}
	if ($privilegio == 'AGREGAR USUARIOS') {$MODULO_USUARIOS = 'block'; $AGREGAR_USUARIOS = 'block'; }
	if ($privilegio == 'LISTAR USUARIOS') {$MODULO_USUARIOS = 'block'; $LISTAR_USUARIOS = 'block'; }
	//PRODUCTOS
	if ($privilegio == 'MODULO PRODUCTOS') {$MODULO_PRODUCTOS = 'block'; $AGREGAR_PRODUCTOS = 'block';}
	if ($privilegio == 'AGREGAR PRODUCTOS') {$MODULO_PRODUCTOS = 'block'; $AGREGAR_PRODUCTOS = 'block'; }
	//ORIGENES
	if ($privilegio == 'MODULO ORIGENES') {$MODULO_ORIGENES = 'block'; $AGREGAR_ORIGENES = 'block';}
	if ($privilegio == 'AGREGAR ORIGENES') {$MODULO_ORIGENES = 'block'; $AGREGAR_ORIGENES = 'block'; }
	//IMPRESORAS
	if ($privilegio == 'MODULO IMPRESORAS') {$MODULO_IMPRESORAS = 'block'; $AGREGAR_IMPRESORAS = 'block';}
	if ($privilegio == 'AGREGAR IMPRESORAS') {$MODULO_IMPRESORAS = 'block'; $AGREGAR_IMPRESORAS = 'block'; }
	//JOBS
	if ($privilegio == 'MODULO JOBS') {$MODULO_JOBS = 'block'; $AGREGAR_JOBS = 'block';}
	if ($privilegio == 'AGREGAR JOBS') {$MODULO_JOBS = 'block'; $AGREGAR_JOBS = 'block'; }
	//PERFILES
	if ($privilegio == 'MODULO PERFILES') {$MODULO_PERFILES = 'block'; $AGREGAR_PERFILES = 'block';}
	if ($privilegio == 'AGREGAR PERFILES') {$MODULO_PERFILES = 'block'; $AGREGAR_PERFILES = 'block'; }
	//PRIVILEGIOS
	if ($privilegio == 'MODULO PRIVILEGIOS') {$MODULO_PRIVILEGIOS = 'block'; $AGREGAR_PRIVILEGIOS = 'block';}
	if ($privilegio == 'AGREGAR PRIVILEGIOS') {$MODULO_PRIVILEGIOS = 'block'; $AGREGAR_PRIVILEGIOS = 'block'; }


}
 ?>