<?php
	require_once('server.php'); 
	
	session_destroy();
	header('Location: ../index.php');
?>