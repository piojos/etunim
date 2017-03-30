<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Minute</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,700" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/index.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
	<header class="common">
		<div class="container">
			<a href="#" class="logo"><img src="http://placehold.it/170x40" alt=""></a>
			<nav>
				<a href="#" class="current">Inicio</a>
				<a href="#">Pendientes</a>
				<a href="#">Juntas</a>
				<a href="#">Etiquetas</a>
				<a href="#" class="profile"><img src="http://placehold.it/44" alt=""></a>
				<a href="#"><img src="http://placehold.it/44" alt=""><span class="alert">1</span></a>
			</nav>
		</div>
	</header>

<?php

// FUNCTIONS

	function card($status = array()) { ?>
		<div class="card <?php echo $status; ?>">
			<a href="#">
			<div class="profiles">
				<div>
					<img src="http://placehold.it/42" alt="">
				</div>
				<?php if(!strpos($status, 'single')) {
					echo '
					<div>
						<img src="http://placehold.it/42" alt="">
					</div>';
				} ?>

			</div>
			<div class="title">
				Pendiente normal con varios responsables
			</div>
			<div class="details">
				<div class="incharge">Responsables: <strong>Luis</strong>, <strong>Edgar</strong>, <strong>María</strong></div>
				<div class="deliver">Entrega: <strong>6 de Abril</strong></div>
			</div>
			<div class="icons">
				<div>
					<img src="http://placehold.it/18" alt="">
					<span>0 / 2</span>
				</div>
				<div>
					<img src="http://placehold.it/18" alt="">
					<span>3</span>
				</div>
			</div>
			<div class="checkbox">
				<div class="square">
					<div class="check"></div>
				</div>
			</div>
			</a>
		</div><?php
	}

?>
