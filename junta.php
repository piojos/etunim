<?php

	$headClass = 'yellow';
	$bodyClass = 'meeting detail-view';
	include 'header.php'; ?>


	<div class="drawer left">
		<div class="wrap">
			<h1>Junta de Arranque Proyecto Minute App</h1>
			<div class="info">
				<p class="tag date"><strong>27 febrero</strong>, a las <strong>4:00 pm</strong></p>
				<p class="via"><img src="http://placehold.it/24" alt=""> <strong>Via Skype</strong></p>
				<div class="profiles">
					<h3>Participantes</h3>
					<a href="#" data-tooltip-content="Nombre Apellido">
						<img src="http://placehold.it/42" alt="Nombre Apellido">
						<h4>Nombre</h4>
					</a>
					<a href="#" data-tooltip-content="Nombre Apellido">
						<img src="http://placehold.it/42" alt="Nombre Apellido">
						<h4>Nombre</h4>
					</a>
					<a href="#" class="add" data-tooltip-content="Nombre Apellido">
						<img src="http://placehold.it/42/FFFFFF/003366" alt="Nombre Apellido">
						<h4>Agregar</h4>
					</a>
				</div>
				<hr>
				<div class="description">
					<div class="content">
						<p><strong>Objetivos de la junta</strong></p>
						<p>1– Definir los primeros pasos a seguir en el proyecto</p>
						<p>2– Generar los flujos iniciales durante la llamada</p>
						<p>3– Determinar fecha de entrega para la primer definición del producto</p>
					</div>
				</div>
				<div class="actions">
					<a href="#" class="text-button">Editar</a>
				</div>
			</div>
		</div>
	</div>

	<div class="drawer right">
		<div class="wrap">
			<h3>Comentarios (<span class="amount">2</span>)</h3>
		</div>
		<div class="comments wrap">
			<div class="blank">
				No hay comentarios aún.
			</div>

			<div class="incomming message">
				<div class="profile picture">
					<img src="http://placehold.it/42" alt="Nombre Apellido">
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
					<img src="http://placehold.it/42" alt="Nombre Apellido">
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
					<img src="http://placehold.it/42" alt="Nombre Apellido">
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

			<div class="reply">
				<form class="wrap" action="index.html" method="post">
					<input type="text" placeholder="Escribe un comentario..." name="" value="">
					<input class="text-button" type="submit" name="" value="Enviar">
				</form>
			</div>

		</div>
	</div>



</body>
</html>
