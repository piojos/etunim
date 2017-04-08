<?php

	$headClass = 'yellow';
	$bodyClass = 'meeting detail-view';
	include 'header.php'; ?>


	<div class="drawer left">
		<div class="wrap">
			<h1>Junta de Arranque Proyecto Minute App</h1>
			<div class="info">
				<p class="tag date"><strong>27 febrero</strong>, a las <strong>4:00 pm</strong></p>
				<p class="via"><img src="img/ic-place-yellow.svg" alt=""> <strong>Via Skype</strong></p>
				<div class="attending profiles">
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




	<div class="middle tasks">
		<h3>Pendientes (<span class="amount">2</span>)</h3>
		<div class="cards"><?php
			echo card('square overdue');
			echo card('square single');
			echo card('square done'); ?>


				<div class="card newtask">
					<div class="circle profiles">
						<div>
							<img src="http://placehold.it/42" alt="">
						</div>
					</div>
					<form class="" action="index.html" method="post">
						<input type="text" name="task-name" value="" placeholder="Nombre de la tarea">
						<input type="text" name="task-name" value="" placeholder="Responsables">
						<input type="text" name="task-name" value="" placeholder="Fecha de entrega">
						<div class="month" style="display:none">
							<?php include 'inc/calendar.php'; ?>
						</div>
						<input type="text" name="task-name" value="" placeholder="Prioridad">
						<input type="submit" name="" value="Guardar" class="text-button">
					</form>
				</div>


		</div>
		<div class="actions" style="text-align:center;">
			<a href="#" class="button blue">Agregar pendiente</a>
		</div>
	</div>

	<?php comments(); ?>


</body>
</html>
