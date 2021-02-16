<?php 
//Carga de datos en base al pk
date_default_timezone_set('America/Monterrey');
require_once '../../../model/perfil.php';
$perfil = new Perfil();


$pkperfil = base64_decode($_GET['a']);

$perfil->set('pkperfil', $pkperfil);
$datos = $perfil->viewPerfilByPk();
while ($row = mysqli_fetch_array($datos)) {
	$nombre = $row['nombre_perfil'];
}

 ?>
 <div class="container-fluid">
	<div class= "col-md-12">
		<!-- Basic Card Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Información del perfil <?php echo $nombre;?></h6>
			</div>
			<div class="card-body">
				<form onsubmit="return validar()" name="form1" action="../../../controller/perfil/insert_detalle_perfil.php?a=<?php echo base64_encode($pkperfil);?>" method="post">
					<div class="form-body">
						<div class="row">
							<div class="col-md-7 table-responsive">          
								<?php include('table_detalle.php');?>
							</div>

							<div class="col-md-5">
								<?php include('add_form_detalle.php');?>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<a href="view_perfil.php"><button type="button" class="btn btn-outline-info">Regresar</button></a>
			</div><!-- end .form-footer section -->
		</div>
	</div>
</div>