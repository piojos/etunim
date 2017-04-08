<?php

	$headClass = 'blue';
	$bodyClass = 'task closed detail-view ';
	include 'header.php'; ?>


	<div class="drawer left">
		<div class="wrap">
			<div class="solved tag">
				<img src="img/ic-task-done.svg" alt=""> Resuelto
			</div>
			<div class="task title">
				<div class="circle profiles">
					<div>
						<img src="http://placehold.it/42" alt="">
					</div>
					<div>
						<img src="http://placehold.it/42" alt="">
					</div>
				</div>
				<h1>Definición Inicial Minute</h1>
				<p>Responsables: <strong>Pedro López</strong></p>
			</div>
			<div class="task description">
				<div class="content">
					<p><span class="due">Entrega: 10 marzo</span></p>
					<p>Resuelto: <span class="delivered">11 marzo, a las 11:23 am</span></p>
					<br>

					<p>Se presentó un prototipo al cliente para ilustrar la funcionalidad clave de la plataforma.</p>
					<br>

					<p><strong>Archivos</strong></p>
					<p><a href="#">Prototipo Inicial</a></p>
					<p><a href="#">Matríz de requerimientos</a></p>
					<br>
				</div>
			</div>
			<div class="task info">
				<p>Etiquetas: <strong class="tag">Skype</strong> <strong class="tag">MinuteApp</strong></p>
				<p class="ellipsis">Origen: <strong class="tag yellow">Junta de Arranque Proyecto Minute App</strong></p>
			</div>
			<div class="actions">
				<a href="#" class="text-button edit">Reabrir pendiente</a>
			</div>
		</div>
	</div>




	<div class="middle tasks">
		<h3>Tareas (<span class="amount">7</span>)</h3>
		<div class="cards"><?php
			echo card('square done');
			echo card('square done');
			echo card('square done');
			echo card('square done');
			echo card('square done');
			echo card('square done');
			echo card('square done'); ?>
		</div>
	</div>

	<?php comments('closed'); ?>


</body>
</html>
