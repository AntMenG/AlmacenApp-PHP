<?php

	include('link.php');

	$action = $_POST['action'];

	if ($action == 'NProduct') {
		NProduct();
	} else if ($action == 'EProduct') {
		EProduct();
	} else if ($action == 'si') {
		RProduct();
	} else {
		echo "Acción inválida";
	}

	function NProduct() {

		include('link.php');

		$name = $_POST['name'];
		$mark = $_POST['mark'];
		$type = $_POST['type'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];

		if (
			$name != '' &&
			$mark != '' &&
			$type != '' &&
			$description != '' &&
			$price != '' &&
			$quantity != ''
		) {

			$query = "INSERT INTO products VALUES (
				NULL,
				'" . $name . "',
				'" . $mark . "',
				'" . $type . "',
				'" . $description . "',
				'" . $price . "',
				'" . $quantity . "'
			)";

			$insert = $link->query($query);

			echo "Realizado";

		}else{
			echo "No has llenado todos los campos";
		}
	}

	function EProduct() {

		include('link.php');

		$id = $_POST['id'];
		$name = $_POST['name'];
		$mark = $_POST['mark'];
		$type = $_POST['type'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];

		if (
			$id != '' &&
			$name != '' &&
			$mark != '' &&
			$type != '' &&
			$description != '' &&
			$price != '' &&
			$quantity != ''
		) {

			$query = "UPDATE products SET
				name='" . $name . "',
				mark='" . $mark . "',
				type='" . $type . "',
				description='" . $description . "',
				price='" . $price . "',
				quantity='" . $quantity . "'
				WHERE id='" . $id . "'
			";

			$update = $link->query($query);

			echo "Actualizado";

		}else{
			echo "No has llenado todos los campos";
		}
	}

	function RProduct() {

		include('link.php');

		$id = $_POST['id'];

		if (
			$id != ''
		) {

			$query = "DELETE from products WHERE id = '" . $id . "'";

			$remove = $link->query($query);

			echo "Eliminado";

		}else{
			echo "No has llenado todos los campos";
		}
	}

	$link->close();

?>
