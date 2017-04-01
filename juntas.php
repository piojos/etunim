<?php

	$headClass = 'yellow';
	include 'header.php'; ?>


	<div class="container">
		<div class="row">
			<div class="three columns sidebar searchable">
				<div class="search">
					<input type="text" placeholder="Busca una junta" name="" value="">
					<button type="button" name="button"><img src="http://placehold.it/24" alt=""></button>
				</div>
				<h2>Proximas Juntas</h2>
				<ul>
					<li>
						<a href="#">
							<h3>Junta de Revisión Prototipo Minute</h3>
							<div class="details">
								<p>Lugar: <strong>via Skype</strong> <br>
								Fecha: <strong>9 de marzo, 09:00 am</strong></p>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<h3>Junta de Arranque Proyecto Minute App</h3>
							<div class="details">
								<p>Lugar: <strong>Piso 3, sala de juntas A</strong> <br>
								Fecha: <strong>28 de marzo, 10:00 am</strong></p>
							</div>
						</a>
					</li>
				</ul>
				<div class="actions">
					<a href="#" class="button yellow"> Crear junta</a>
				</div>
			</div>


			<div class="nine columns dashboard">
				<h2>Juntas con pendientes activos</h2>

				<div class="cards"><?php

					echo card('long meeting');
					echo card('long meeting');
					echo card('long meeting');
					echo card('long meeting'); ?>

					<div class="loadcard">
						<p>Filtrando...</p>
					</div>

				</div>

			</div>
		</div>
	</div>

</body>
</html>
