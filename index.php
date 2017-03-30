<?php include 'header.php'; ?>


	<div class="container">
		<div class="row">
			<div class="three columns sidebar">
				<h2>Proximas Juntas</h2>
				<ul>
					<li>
						<a href="#">
							<h3>Junta de Revisión Prototipo Minute</h3>
							<p>Lugar: <strong>via Skype</strong> <br>
							Fecha: <strong>9 de marzo, 09:00 am</strong></p>
						</a>
					</li>
					<li>
						<a href="#">
							<h3>Junta de Arranque Proyecto Minute App</h3>
							<p>Lugar: <strong>Piso 3, sala de juntas A</strong> <br>
							Fecha: <strong>28 de marzo, 10:00 am</strong></p>
						</a>
					</li>
				</ul>
				<a href="#" class="button"> Crear junta</a>
				<a href="#" class="button"> Agregar pendiente</a>
			</div>


			<div class="nine columns dashboard">
				<h2>Pendientes con actividad reciente</h2>
				<div class="stats">
					<div class="stat">
						<div class="number">
							34
						</div>
						<h4>Pendientes Activos</h4>
					</div>
					<div class="stat">
						<div class="number">
							14
						</div>
						<h4>Pendientes a mi cargo</h4>
					</div>
					<div class="stat">
						<div class="number">
							24
						</div>
						<h4>Tareas asignadas a mí</h4>
					</div>
				</div>

				<div class="cards"><?php

					echo card('long done');
					echo card('long overdue');
					echo card('long single');
					echo card('long '); ?>



				</div>

			</div>
		</div>
	</div>

</body>
</html>
