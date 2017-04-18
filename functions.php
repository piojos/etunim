<?php


	// Profile placeholders

	function profile($color = '') {
		if($color AND $color == 'white') {
			return 'img/profile-white.svg';
		} else if($color AND $color == 'yellow') {
			return 'img/profile-yellow.svg';
		} else {
			return 'img/profile-neutral.svg';
		}
	}





	// FUNCTIONS

	function card($status = array()) { ?>
		<div class="card <?php echo $status; ?>">
			<a href="<?php
				if(strpos($status, 'meeting')) {
					echo 'junta.php';
				} else {
					echo 'pendiente.php';
				} ?>">
			<?php if(!strpos($status, 'meeting')) { ?>
			<div class="circle profiles">
				<div>
					<img src="<?php echo profile(); ?>" alt="">
				</div>
				<?php if(!strpos($status, 'single')) {
					echo '
					<div>
						<img src="'.profile().'" alt="">
					</div>';
				} ?>
			</div>
			<?php } ?>
			<div class="title">
				Pendiente normal con varios responsables
			</div>
			<div class="details">
				<div class="incharge">Responsables: <?php
				if(!strpos($status, 'single')) {
					echo '<strong>Luis</strong>, <strong>Edgar</strong>, <strong>María</strong>';
				} else {
					echo '<strong>Luis Herrada</strong>';
				} ?>
				</div>
				<div class="deliver">Entrega: <strong>6 de Abril</strong></div>
			</div>
			<div class="icons">
				<div>
					<img src="img/ic-todos.svg" alt="">
					<span>0 / 2</span>
				</div>
				<div>
					<img src="img/ic-comments.svg" alt="">
					<span>3</span>
				</div>
			</div>
			<?php if(!strpos($status, 'meeting')) { ?>
			<div class="checkbox">
				<div class="square">
					<div class="check"></div>
				</div>
			</div>
			<?php } ?>
			</a>
		</div><?php
	}





	// COMMENTS

	function comments($status) { ?>
		<div class="drawer right">
			<div class="wrap">
				<h3>Comentarios (<span class="amount">2</span>)</h3>
			</div>
			<div class="comments wrap"><?php
				if(strpos($status, 'blank')) { ?>
				<div class="blank">
					No hay comentarios aún.
				</div>
				<?php } else { ?>

				<div class="incomming message">
					<div class="profile picture">
						<img src="<?php echo profile(); ?>" alt="Nombre Apellido">
					</div>
					<div class="data">
						<div class="name info">
							Nombre Apellido <span>27 febrero, a las 4:00 pm</span>
						</div>
						<div class="content">
							¿Si logramos salir con prototipo para el viernes 10? <a href="#">http://google.com</a>
						</div>
					</div>
				</div>

				<div class="outgoing message">
					<div class="profile picture">
						<img src="<?php echo profile(); ?>" alt="Nombre Apellido">
					</div>
					<div class="data">
						<div class="name info">
							Nombre Apellido <span>27 febrero, a las 4:00 pm</span>
						</div>
						<div class="content">
							¿Si logramos salir con prototipo para el viernes 10? <a href="#">http://google.com</a>
						</div>
					</div>
				</div>

				<div class="incomming message">
					<div class="profile picture">
						<img src="<?php echo profile(); ?>" alt="Nombre Apellido">
					</div>
					<div class="data">
						<div class="name info">
							Nombre Apellido <span>27 febrero, a las 4:00 pm</span>
						</div>
						<div class="content">
							¿Si logramos salir con prototipo para el viernes 10? <a href="#">http://google.com</a>
						</div>
					</div>
				</div>

				<?php } ?>

			</div>

			<div class="comment reply">
				<form class="wrap" action="index.html" method="post"><?php
					if(strpos($status, 'closed') !== false ) { ?>
					<input type="text" placeholder="Comentarios cerrados" name="" value="" disabled>
					<!-- <input class="text-button" type="submit" name="" value="Enviar" disabled> -->
					<?php } else { ?>
					<input type="text" placeholder="Escribe un comentario..." name="" value="">
					<input class="text-button blue" type="submit" name="" value="Enviar">
					<?php } ?>
				</form>
			</div>
		</div><?php
	}




?>
