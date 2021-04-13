
	<?php
	session_start();
	include_once('Controller/C_MV.php');
	$_SESSION['controller'] = new Ctrl_MV();
	$_SESSION['controller']->invoke();
	?>
