<?php
	session_start();
	session_destroy();
	$_SESSION['user'] = null;
	session_destroy();
	header('Location:/');
?>