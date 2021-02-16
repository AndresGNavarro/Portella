<?php 
 require_once '../../model/job.php';
$jobdesc = str_replace(array('\'', '"'), '', $_POST['job'] );
 $job = new Job();
  $job->set('job', $jobdesc );
  $job->set('estado', 1 );


 $respuesta = $job->validarJob();
 if ($respuesta != "0" ) {
 	echo"<script>window.location.href=\"../../view/pc/job/view_job.php?msg=1\"</script>";
 }else{

 	$inserta = $job->addJob();
 	 if ($inserta) {

      
      echo"<script>window.location.href=\"../../view/pc/job/view_job.php?msg=2\"</script>";
     }else{
        
        echo"<script>window.location.href=\"../../view/pc/job/view_job.php?msg=3\"</script>";
     }
 }
 ?>