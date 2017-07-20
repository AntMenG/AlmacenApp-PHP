<?php
	if(!$_SESSION['user']){
		header('Location:/');
	}
	$mode = $_GET['mode'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Buzzard | Panel
	</title>
	<link rel="stylesheet" type="text/css" href="/public/css/style.css">
	<script type="text/javascript" src="/public/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="/public/js/actions.js"></script>
	<script type="text/javascript" src="/public/js/config.js"></script>
</head>
<body class="back<?php echo $back; ?>">

	<div id="space">

		<?php include('configuration.php'); ?>

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
				<a href="/" <?php if(!isset($mode)){ echo 'class="active"'; } ?>>Home</a>
				<a href="/index.php?mode=ventas" <?php if($mode == 'ventas'){ echo 'class="active"'; } ?>>Ventas</a>
				<button id="Bconfig">Configuración</button>
				<a href="/config/exit.php">X</a>
			</div>
		</div>

		<?php
			if( !isset($mode) ) {
		?>

			<div id="Container">

				<div class="item__center blur<?php echo $back; ?>">
					<div>
						<div class="alert blur<?php echo $back; ?>">
							<section>
								<p>
									¿ESTAS SEGURO DE QUE QUIERES ELIMINAR ESTE REGISTRO?
								</p>
								<p id="aDates">
									XA UltraSony | Xperia | Celular | Smartphone Sony Xperia XA Ultra 16 GB Lima 4G Desbloqueado | $ 5999.00 | 20
								</p>
								<button type="button" name="si" class="blur<?php echo $back; ?>">
									<div name="RProduct">
										SI
									</div>
								</button>
								<button type="button" name="no" class="blur<?php echo $back; ?>">
									<div>
										NO
									</div>
								</button>
							</section>
						</div>
						<div id="SearchBox" class="blur<?php echo $back; ?>">
							<input type="text" name="find" placeholder="Escribe el nombre de un producto">
							<input type="submit" value="CANCELAR">
							<div id="Finder" class="blur<?php echo $back; ?>">
							</div>
						</div>
						<section id="sectA">
							<button id="Anew" class="active blur<?php echo $back; ?>"></button><br>
							<button id="Aedit" class="blur<?php echo $back; ?>"></button><br>
							<button id="Aremove" class="blur<?php echo $back; ?>"></button>
						</section>
						<section id="block" class="blur<?php echo $back; ?>">
						</section>
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
								<input type="number" name="price">
							</div>
							<div class="blur<?php echo $back; ?>">
								<input type="number" name="quantity">
							</div>
							<div class="blur<?php echo $back; ?>">
								<input id="NProduct" data-action="NProduct" type="submit" value="Enviar">
							</div>
							<input type="hidden" name="id" value="">
						</div>
					</div>
				</div>

				<div class="item__center blur<?php echo $back; ?>">
					<?php
						if (!$_GET['pro'] || $_GET['pro'] == 1){
							$_GET['pro'] = 0;
						}
						$query = "SELECT * FROM products where id > " . $_GET['pro'] .
										/*" ORDER by price DESC" .*/
										" LIMIT 10";

						$result = $link->query($query);

					?>
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
						<section id="secProducts">
							<?php
								$nid = 0;
								while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
									echo '<div class="tblR blur' . $back . '">' .
										'<div>' . $row[1] . '</div>' .
										'<div>' . $row[2] . '</div>' .
										'<div>' . $row[3] . '</div>' .
										'<div>' . $row[4] . '</div>' .
										'<div>$ ' . $row[5] . '</div>' .
										'<div>' . $row[6] . '</div>' .
									'</div>';
									$nid = $row[0];
								}
							?>
						</section>
						<div id="Page" class="blur<?php echo $back; ?>">
							<button class="but blur<?php echo $back; ?>"></button>
							<button class="but blur<?php echo $back; ?>"></button>
							<span>
								<?php

									$query = "SELECT * FROM products";
									$result = $link->query($query);
									$num = 0;
									while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
										$num++;
									}
									$pages = array(0,10,20,30,40,50,60,70,80);
									$flag = true;
									for ($i=1; $i < count($pages); $i++) {
										if ($num > $pages[$i-1]) {
											if (!$_GET['page'] && $flag || $_GET['page'] == 1 && $flag) {
												$flag = false;
												echo '<a href="/?page='.$i.'&pro=' . $pages[$i-1] . '" class="active">'.$i.'</a>';
											} else if ($_GET['page'] == $i && $flag) {
												$flag = false;
												echo '<a href="/?page='.$i.'&pro=' . $pages[$i-1] . '" class="active">'.$i.'</a>';
											} else {
												echo '<a href="/?page='.$i.'&pro=' . $pages[$i-1] . '">'.$i.'</a>';
											}
										}
									}
								?>
							</span>
						</div>
					</div>
				</div>
			</div>

			<?php
				}else if ($mode == 'ventas') {
			?>

			<div id="Container" class="vent">

				<div id="vent1" class="item__center blur<?php echo $back; ?>">
					<div>
						<form id="SearchBox" class="blur<?php echo $back; ?>">
							<input type="text" name="find" placeholder="Escribe el nombre de un producto">
							<input type="submit" value="Buscar">
						</form>
					</div>
					<div>
						<button id="Add" class="active blur<?php echo $back; ?>"></button>
					</div>
				</div>

				<div style="min-height: 90px !important;" class="item__center blur<?php echo $back; ?>">
					<?php

						$query = "SELECT * FROM products ORDER by price DESC LIMIT 10";

						$result = $link->query($query);

					?>
					<div>
						<div id="ventR" class="tblH blur<?php echo $back; ?>">
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
								CANTIDAD
							</div>
							<div>
								PRECIO
							</div>
						</div>
						<section>
							<div class="tblR blur<?php echo $back ?>">
								<div>COMPANY</div>
								<div>1</div>
								<div>1</div>
								<div>1</div>
								<div>1</div>
								<div>1</div>
							</div>
						</section>
						<div id="Page" class="blur<?php echo $back; ?>">
							<div>
								Total:
							</div>
							<div>
								$ 320
							</div>
						</div>
					</div>

				</div>

			</div>

		<?php
			}
		?>

	</div>

</body>
</html>
