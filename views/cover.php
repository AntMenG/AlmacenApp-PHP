<!DOCTYPE html>
<html>
<head>
	<title>
		Buzzard | Login
	</title>
	<link rel="stylesheet" type="text/css" href="/public/css/style.css">
	<script type="text/javascript" src="/public/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="/public/js/actions.js"></script>
</head>
<body class="blur<?php echo $back; ?>" style="overflow: hidden;">
	<div id="body">

		<div id="PI" class="blur<?php echo $back; ?>">
			<div id="PIheader">
				Buzzard
			</div>
			<div id="PIUser">
				<div id="PIUimg" class="blur<?php echo $back; ?>">
					<div>
						<img src="/public/user/AntMenG.jpg">
					</div>
				</div>
			</div>
			<div id="PIcont">
				<a href="/" class="active">Home</a>
				<a href="/index.php?mode=ventas">Ventas</a>
				<button id="Bconfig">Configuración</button>
				<a href="/config/exit.php">X</a>
			</div>
		</div>

		<div id="Container">
			<div class="item__center blur<?php echo $back; ?>">
				<div>
					<form id="SearchBox" class="blur<?php echo $back; ?>">
						<input type="text" name="find" placeholder="Escribe el nombre de un producto">
						<input type="submit" value="Buscar">
					</form>
					<section id="block" class="blur<?php echo $back; ?>"></section>
					<div id="Product">
						<div class="blur<?php echo $back; ?>">
							<input type="text" name="name">
						</div>
						<div class="blur<?php echo $back; ?>">
							<input type="text" name="mark">
						</div>
						<div class="blur<?php echo $back; ?>">
							<input type="text" name="type">
						</div>
						<div class="blur<?php echo $back; ?>">
							<input type="text" name="description">
						</div>
						<div class="blur<?php echo $back; ?>">
							<input type="text" name="price">
						</div>
						<div class="blur<?php echo $back; ?>">
							<input type="text" name="quantity">
						</div>
						<div class="blur<?php echo $back; ?>">
							<input id="NProduct" type="submit" value="Enviar">
						</div>
					</div>
				</div>
				<div>
					<button id="Anew" class="active blur<?php echo $back; ?>"></button>
					<button id="Aedit" class="blur<?php echo $back; ?>"></button>
					<button id="Aremove" class="blur<?php echo $back; ?>"></button>
				</div>
			</div>

			<div class="item__center blur<?php echo $back; ?>">
								<div>
					<div class="tblH blur<?php echo $back; ?>">
						<div>
							NOMBRE
						</div>
						<div>
							MARCA
						</div>
						<div>
							TIPO
						</div>
						<div>
							DESCRIPCION
						</div>
						<div>
							PRECIO
						</div>
						<div>
							CANTIDAD
						</div>
					</div>
					<div class="tblR blur<?php echo $back; ?>"><div>Gansito</div><div>Marinela</div><div>Pan</div><div>Pan relleno de fresa</div><div>9.00</div><div>10</div></div><div class="tblR blur<?php echo $back; ?>"><div>Fanta</div><div>Coca-Cola</div><div>Bebida</div><div>Refresco sabor naranja</div><div>12.50</div><div>24</div></div><div class="tblR blur<?php echo $back; ?>"><div>Barritas</div><div>Marinela</div><div>Galleta</div><div>Barritas de fruta (75 gramos, paquete con dos barritas)</div><div>11.50</div><div>24</div></div><div class="tblR blur<?php echo $back; ?>"><div>Doritos</div><div>Sabritas</div><div>Papas</div><div>Papas Fritas (58 gramos, una bolsa)</div><div>14.50</div><div>20</div></div><div class="tblR blur<?php echo $back; ?>"><div>Agua</div><div>Ciel</div><div>Bebida</div><div>Envase de Medio Litro</div><div>8.00</div><div>21</div></div><div class="tblR blur<?php echo $back; ?>"><div>Coca Cola</div><div>Coca-Cola</div><div>Bebida</div><div>Botella (600ml)</div><div>11.00</div><div>30</div></div><div class="tblR blur<?php echo $back; ?>"><div>Agua</div><div>Epura</div><div>Bebida</div><div>Envase (5L)</div><div>18.00</div><div>22</div></div><div class="tblR blur<?php echo $back; ?>"><div>Café Olé</div><div>Olé</div><div>Bebida</div><div>Bebida de café Café Olé cappuccino clásico (281 ml)</div><div>19.10</div><div>20</div></div><div class="tblR blur<?php echo $back; ?>"><div>Jumex</div><div>Jumex</div><div>Bebida</div><div>Néctar Jumex toronja (1L)</div><div>16.90</div><div>25</div></div><div class="tblR blur<?php echo $back; ?>"><div>Boing</div><div>Boing</div><div>Bebida</div><div>Bebida Boing pulpa de mango (250 ml)</div><div>5.20</div><div>16</div></div>					<div id="Page" class="blur<?php echo $back; ?>">
						<button class="but blur<?php echo $back; ?>"></button>
						<button class="but blur<?php echo $back; ?>"></button>
						<span>
							<button class="active">1</button>
							<button>2</button>
							<button>3</button>
						</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</body>
</html>
<div id="C">
	<div id="cover">
		<span id="header">
			INICIAR SESION
		</span>
		<form action="config/session.php" method="POST" id="cont">
			<input type="text" name="user" placeholder="USUARIO">
			<input type="password" name="pass" placeholder="CONTRASEÑA">
			<input type="submit" value="INGRESAR">
		</form>
	</div>
</div>
