<?php 

	$pk_job=base64_decode($_GET['a']);
	require_once '../../model/job.php';
    $job = new Job();
    $job->set('pkjob', $pk_job);
	$respuesta = $job->deleteJob();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/job/view_job.php?msg=4\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/job/view_job.php?msg=3\"</script>";
	}
	
	

?>