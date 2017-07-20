<?php
	include('link.php');

	if($link) {

		echo 'Conectado';

	}

	mysqli_query($link, 'create table usrs (
		id int(10) auto_increment primary key,
		user varchar(24),
		password varchar(300),
		type int(1)
	)');

	mysqli_query($link, 'create table products (
		id int(10) auto_increment primary key,
		name varchar(24),
		mark varchar(24),
		type varchar(24),
		description varchar(220),
		price decimal( 9, 2),
		quantity int(10)
	)');

	mysqli_query($link, 'create table configuration (
		id int primary key,
		background int(2)
	)');

	$options = [
        'cost' => 10,
    ];
	/*
  $hash = password_hash("105012", PASSWORD_DEFAULT, $options);
	mysqli_query($link, 'insert into usrs (user,password) values (
		"AntMenG",
		"' . $hash . '"
	)');
	mysqli_query($link, 'insert into configuration values (
		1,
		4
	)');
	*/
?>
