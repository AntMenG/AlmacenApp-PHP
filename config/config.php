<?php

	include('link.php');

	$back = $_POST['background'];

	if ($back != '' && $back <= 10) {

		$query = "UPDATE configuration SET background = '$back' WHERE id = '1'";

		$update = $link->query($query);

		echo "Realizado";

	}

	$link->close();
	
?>