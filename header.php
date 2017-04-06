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
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/index.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <?php include 'functions.php'; ?>
</head>
<body class="<?php echo $bodyClass; ?>">
	<header class="<?php
		if($headClass) {
			echo $headClass;
		} else {
			echo 'common';
		}
	?>">
		<div class="container">
			<a href="#" class="logo"><img src="<?php
			if(strpos($headClass, 'yellow') !== false) {
				echo 'img/logo-black.svg';
			} else {
				echo 'img/logo-white.svg';
			}
			?>" alt=""></a>
			<nav>
				<a href="index.php" class="current">Inicio</a>
				<a href="pendientes.php">Pendientes</a>
				<a href="juntas.php">Juntas</a>
				<a href="etiquetas.php">Etiquetas</a>
				<a href="#" class="profile"><img src="http://lorempixel.com/44/44/people" alt=""></a>
				<a href="#" class="notifications">
					<img src="<?php
					if(strpos($headClass, 'yellow') !== false) {
						echo 'img/ic-bell-black.svg';
					} else {
						echo 'img/ic-bell.svg';
					}
					?>" alt="" class="dt">
					<img src="img/ic-bell-black.svg" alt="" class="mo">
					<span class="alert">1</span>
				</a>
			</nav>
		</div>
	</header>
