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
		<div class="card <?php echo $status; ?>"><?php
		if(strpos($status, 'blank') !== false) {
			echo '<p>Aún no hay pendientes en esta junta.</p>';
		} else { ?>
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
			</a><?php
		} ?>
		</div><?php
	}





	// COMMENTS

	function comments($status) { ?>
		<div class="drawer right">
			<div class="wrap">
				<h3>Comentarios (<span class="amount"><?php
				if(strpos($status, 'blank') !== false ) { echo '0'; }
				else { echo '3'; }

				 ?></span>)</h3>
			</div>
			<div class="comments wrap"><?php
				if(strpos($status, 'blank') !== false ) { ?>
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


	// NICE DROPDOWNS
	function dropdownProfiles($style) {
		if($style == 'radio') {
			$styleClass = 'radio';
		} else {
			$styleClass = 'checkbox';
		}
		$construct = '
		<div class="nice dropdown '.$styleClass.'" id="choose_profile">
			<div class="previewlabel">Todos los miembros</div>
			<div class="heightlimit">
				<ul id="div-tick">';
		if($style == 'radio') {
			$construct .= '
					<li id="div-tick">
						<div class="tick-button" id="div-tick">
							<input type="radio" name="choose_profile" id="martinmartinez" title="Martin">
							<label for="martinmartinez">Martín Martinez</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="radio" name="choose_profile" id="GonzaloGonzalez" title="Gonzalo">
							<label for="GonzaloGonzalez">Gonzalo Gonzalez</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="radio" name="choose_profile" id="DomingoDomínguez" title="Domingo">
							<label for="DomingoDomínguez">Domingo Domínguez</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="radio" name="choose_profile" id="AnaAncira" title="Ana" checked>
							<label for="AnaAncira">Ana Ancira</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="radio" name="choose_profile" id="TiburcioTijerina" title="Tiburcio">
							<label for="TiburcioTijerina">Tiburcio Tijerina</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="radio" name="choose_profile" id="RaulRamirez" title="Raul" checked>
							<label for="RaulRamirez">Raul Ramirez</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="radio" name="choose_profile" id="YanethYañez" title="Yaneth">
							<label for="YanethYañez">Yaneth Yañez</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="radio" name="choose_profile" id="SamuelSamudio" title="Samuel">
							<label for="SamuelSamudio">Samuel Samudio</label>
						</div>
					</li>';
		} else {
			$construct .= '
					<li id="div-tick">
						<div class="tick-button" id="div-tick">
							<input type="checkbox" name="choose_profile" id="martinmartinez" title="Martin">
							<label for="martinmartinez">Martín Martinez</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="checkbox" name="choose_profile" id="GonzaloGonzalez" title="Gonzalo">
							<label for="GonzaloGonzalez">Gonzalo Gonzalez</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="checkbox" name="choose_profile" id="DomingoDomínguez" title="Domingo">
							<label for="DomingoDomínguez">Domingo Domínguez</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="checkbox" name="choose_profile" id="AnaAncira" title="Ana" checked>
							<label for="AnaAncira">Ana Ancira</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="checkbox" name="choose_profile" id="TiburcioTijerina" title="Tiburcio">
							<label for="TiburcioTijerina">Tiburcio Tijerina</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="checkbox" name="choose_profile" id="RaulRamirez" title="Raul" checked>
							<label for="RaulRamirez">Raul Ramirez</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="checkbox" name="choose_profile" id="YanethYañez" title="Yaneth">
							<label for="YanethYañez">Yaneth Yañez</label>
						</div>
					</li>
					<li>
						<div class="tick-button">
							<input type="checkbox" name="choose_profile" id="SamuelSamudio" title="Samuel">
							<label for="SamuelSamudio">Samuel Samudio</label>
						</div>
					</li>';
		}
		$construct .= '
				</ul>
			</div>
		</div>';

		return $construct;
	}




?>
