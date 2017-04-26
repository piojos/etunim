<?php

	$headClass = 'blue';
	$bodyClass = 'task detail-view';
	include 'header.php'; ?>


	<div class="drawer left">
		<div class="wrap">
			<div class="task title">
				<div class="circle profiles">
					<div>
						<img src="<?php echo profile(); ?>" alt="">
					</div>
					<div>
						<img src="<?php echo profile(); ?>" alt="">
					</div>
				</div>
				<h1>Definición Inicial Minute</h1>
				<p>Responsables: <strong>Pedro López</strong></p>
			</div>
			<div class="task info">
				<p class="priority-icon med"><strong>Prioridad media</strong></p>
				<p>Entrega: <strong class="tag blue">27 febrero</strong></p>
				<p>Etiquetas: <strong class="tag">Skype</strong> <strong class="tag">MinuteApp</strong></p>
				<p class="ellipsis">Origen: <strong class="tag yellow">Junta de Arranque Proyecto Minute App</strong></p>
				<hr>
			</div>
			<div class="description">
				<div class="content">
					<p><strong>Objetivos de la junta</strong></p>
					<p>1– Definir los primeros pasos a seguir en el proyecto</p>
					<p>2– Generar los flujos iniciales durante la llamada</p>
					<p>3– Determinar fecha de entrega para la primer definición del producto</p>
				</div>
			</div>
			<div class="actions">
				<a href="#" class="text-button edit">Editar</a>
				<a href="#" class="button blue resolve">Resolver <div class="checkbox"></div></a>
			</div>
		</div>
	</div>




	<div class="middle tasks">
		<h3>Tareas (<span class="amount">5</span>)</h3>
		<div class="cards"><?php
			echo card('square overdue');
			echo card('square single');
			echo card('square done'); ?>


			<div class="card newtask">
				<div class="circle profiles">
					<div>
						<img src="<?php echo profile(); ?>" alt="">
					</div>
				</div>
				<form class="" action="index.html" method="post">
					<input type="text" name="task-name" value="" placeholder="Nombre de la tarea">
					<?php // <input type="text" name="task-people" value="" placeholder="Responsables">
					echo dropdownProfiles(); ?>
					<input type="text" name="date" value="" placeholder="Fecha de entrega" class="icondetail date hasDatepicker" id="datepicker">
					<?php //<input type="text" name="task-name" value="" placeholder="Prioridad"> ?>
					<div class="nice dropdown radio" id="choose_priority">
						<div class="previewlabel">Prioridad</div>
						<div class="heightlimit">
							<ul id="div-tick">
								<li>
									<div class="tick-button">
										<input type="radio" name="choose_priority" id="Alta" title="Alta">
										<label for="Alta">Alta</label>
									</div>
								</li>
								<li>
									<div class="tick-button">
										<input type="radio" name="choose_priority" id="Media" title="Media">
										<label for="Media">Media</label>
									</div>
								</li>
								<li>
									<div class="tick-button">
										<input type="radio" name="choose_priority" id="Baja" title="Baja">
										<label for="Baja">Baja</label>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<input type="submit" name="" value="Guardar" class="text-button">
				</form>
			</div>


		</div>
		<div class="actions" style="text-align:center;">
			<a href="#" class="button blue">Agregar pendiente</a>
		</div>
	</div>

	<?php comments(); ?>


<?php include 'footer.php'; ?>
