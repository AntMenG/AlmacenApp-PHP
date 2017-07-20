<?php
	session_start();

	include('config/link.php');

	$query = 'SELECT * FROM configuration';

	$result = $link->query($query);

	$row = $result->fetch_array(MYSQLI_BOTH);

	$back = $row[1];

	$result->free();

	if(@$_SESSION['user']){
		include('views/content.php');
	}else{
		include('views/cover.php');
	}
?>