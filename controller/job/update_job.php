<?php 
	
	require_once '../../model/job.php';
	$jobdesc = str_replace(array('\'', '"'), '', $_POST['job'] );
    $job = new Job();
    $job->set('pkjob', $_POST['pkjob']);
  	$job->set('job', $jobdesc);
  	$job->set('estado', $_POST['estado'] );
	$respuesta = $job->updateJob();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/job/view_job.php?msg=2\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/job/view_job.php?msg=3\"</script>";
	}
	
	

?>