<?php
	/*
	 * File: 	logout.php
	 *
	 * Author:	Brandon White (brandonwhite@cmail.com)
	 * Date: 	Winter 2020
	 * Course:	Design Studio I
	 * 
	 * Summmary of File:
	 *
	 *	Logs user out of session and redirects them to the login
	 * 	page. 
	*/

	require_once('server.php'); 
	
	session_destroy();
	header('Location: ../index.php');
?>