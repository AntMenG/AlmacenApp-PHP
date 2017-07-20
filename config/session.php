<?php

	include('link.php');

	$user = @$_POST['user'];
	$pass = @$_POST['pass'];

	if ($user != '' || $pass != '') {

		$query = "SELECT * FROM usrs where user = '" . $user . "'";

		$result = $link->query($query);

		$row = $result->fetch_array(MYSQLI_BOTH);

		if($row[2]){

			if(password_verify( $pass, $row[2])){
				session_start();
				$_SESSION['user'] = $row[1];
				header('Location:/');
			}else{
				header('Location:/');
			}

		}else{
			header('Location:/');
		}

		$result->free();

	}else{
		header('Location:/');
	}

	$link->close();
	
?>