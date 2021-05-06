<?php 
	
	@session_start();
	@session_destroy();
	$_SESSION['token_usuario'] = 0;


	echo "<script language='javascript'>window.location='index.php'; </script>";
	
 ?>