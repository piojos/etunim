<?php

	$headClass = 'blue';
	$bodyClass = 'active-modal';
	include 'header.php'; ?>

<div class="overlay"></div>




<div class="modal" id="notifications">
	<div class="header">
		<p>Notificaciones</p>
		<a href="#" class="close"></a>
	</div>
	<div class="pending-confirm">
		<h2>Nuevas tareas</h2>
		<ul class="task cards">
			<li class="card">
				<p>Revisar el prototipo antes de la presentación</p>
				<small>Asignado por <strong>Pedro</strong> el <strong>8 de marzo</strong></small>
				<div class="actions">
					<a href="#" class="squared button blue">Aceptar</a>
					<a href="#" class="squared button red">Rechazar</a>
				</div>
			</li>
		</ul>
	</div>
	<div class="activity">
		<h2>Actividad</h2>
		<ul class="activity cards">
			<li class="card">
				<div class="circle profiles">
					<div><img src="<?php echo profile(); ?>" alt=""></div>
				</div>
				<div class="info">
					<p>Pedro López te invitó a la junta Junta de Arranque Proyecto Minute App</p>
					<small>5 de marzo, 10:03 am</small>
				</div>
			</li>
			<li class="card">
				<div class="circle profiles">
					<div><img src="<?php echo profile(); ?>" alt=""></div>
				</div>
				<div class="info">
					<p>Pedro López terminó la tarea Agendar Presentación de Prototipo en Definición Inicial Minute</p>
					<small>4 de marzo, 10:03 am</small>
				</div>
			</li>
			<li class="card">
				<div class="circle profiles">
					<div><img src="<?php echo profile(); ?>" alt=""></div>
				</div>
				<div class="info">
					<p>Daniel Miranda comentó en Definición Inicial Minute</p>
					<small>3 de marzo, 10:03 am</small>
				</div>
			</li>
		</ul>
	</div>
</div>




<div class="modal profile" id="my-profile">
	<div class="header">
		<p>Mi perfil</p>
		<a href="#" class="close"></a>
	</div>
	<form class="" action="" method="post">
		<div class="profile image">
			<input type="file" name="" value="choose...">
			<img src="<?php echo profile(); ?>" alt="">
		</div>
		<input type="text" name="" value="Francisco Martinez">
		<input type="text" name="" value="paco@martinez.mx">
	</form>
	<hr>
	<?php include 'inc/stats.php'; ?>
	<ul class="options">
		<li><a href="#">Cambiar contraseña</a></li>
		<li><a href="#">Salir de Minute App</a></li>
	</ul>
</div>




<div class="modal tooltip profile" id="profile-stats">
	<div class="header">
		<div class="circle profiles">
			<div>
				<img src="<?php echo profile(); ?>" alt="">
			</div>
		</div>
		<h3><strong>Nombre</strong> Apellido</h3>
		<p>nombre@empresa.com</p>
		<a href="#" class="close"></a>
	</div>
	<?php include 'inc/stats.php'; ?>
	<div class="actions single">
		<a href="#" class="text-button">Eliminar de esta junta</a></li>
	</div>
</div>




<div class="create modal profile" id="new-meeting">
	<div class="container">
		<h2>Crear Junta</h2>
		<a href="#" class="close"></a>
		<form class="" action="index.html" method="post">
			<div class="row">
				<div class="one-half column">
					<h3>Detalles Generales</h3>
					<input type="text" name="title" value="" placeholder="Título de la Junta">
					<input type="text" name="date" value="" placeholder="Fecha de la junta" class="icondetail date hasDatepicker" id="datepicker">
					<input type="text" name="hour" value="" placeholder="Hora de la junta" class="icondetail time" id="timepicker">
					<input type="text" name="place" value="" placeholder="Lugar de la junta" class="icondetail location">
					<textarea name="objectives" rows="4" placeholder="Objetivos de la junta"></textarea>
				</div>
				<div class="one-half column">
					<h3>Participantes</h3>
					<div class="attending profiles">
						<a href="#" data-tooltip-content="Nombre Apellido">
							<img src="<?php echo profile('yellow'); ?>" alt="Nombre Apellido">
							<h4>Tú</h4>
						</a>
						<a href="#" data-tooltip-content="Nombre Apellido">
							<img src="<?php echo profile(); ?>" alt="Nombre Apellido">
							<h4>Nombre</h4>
						</a>
					</div>
					<div class="search invite active">
						<form class="" action="#" method="post">
							<input type="text" placeholder="Busca por nombre o correo" name="" value="">
							<button type="button" name="button"><img src="img/ic-search.svg" alt=""></button>
						</form>
						<div class="results" style="display:none">
							<div class="attending profiles">
								<a href="#" data-tooltip-content="Nombre Apellido">
									<img src="<?php echo profile(); ?>" alt="Nombre Apellido">
									<h4>Tú</h4>
								</a>
								<a href="#" data-tooltip-content="Nombre Apellido">
									<img src="<?php echo profile(); ?>" alt="Nombre Apellido">
									<h4>Nombre</h4>
								</a>
							</div>
						</div>
						<div class="results no-match">
							<a href="#">
								<img src="<?php echo profile('white'); ?>" alt="Nombre Apellido">
								<span>Invitar a <strong>Minute app</strong></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row actions footer">
				<select class="" name="">
					<option value="">Juntas Predefinididas</option>
					<option value="">Martín Martinez</option>
					<option value="">Gonzalo Gonzalez</option>
					<option value="">Domingo Domínguez</option>
					<option value="">Ana Ancira</option>
				</select>
				<a href="#" class="text-button blue">Crear e Invitar</a>
			</div>
		</form>
	</div>
</div>




<div class="create modal profile" id="new-task">
	<div class="container">
		<h2>Crear / Editar Pendiente</h2>
		<form class="" action="index.html" method="post">
			<div class="row">
				<div class="one-half column">
					<h3>&nbsp;</h3>
					<input type="text" name="" value="" placeholder="Nombre del pendiente">
					<?php // <input type="text" name="" value="" placeholder="Responsables">
					echo dropdownProfiles(); ?>
					<input type="text" name="" value="" placeholder="Fecha de entrega" class="icondetail date hasDatepicker" id="datepicker">
					<?php
						// <input type="text" name="" value="" placeholder="Prioridad"> ?>
					<input type="text" name="" value="" placeholder="Etiquetas">
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
				</div>
				<div class="one-half column">
					<h3>&nbsp;</h3>
					<div class="wysiwyg button-tray">
						<a href="#" class="bold"> B </a>
						<a href="#" class="italic"> i </a>
					</div>
					<textarea name="name" rows="6" placeholder="Descripción del pendiente"></textarea>
				</div>
			</div>
			<div class="row actions footer">
				<a href="#" class="text-button blue">Crear</a>
			</div>
		</form>
	</div>
</div>

<div class="create modal profile" id="solve-task">
	<div class="container">
		<h2>Resolución de Pendiente</h2>
		<form class="" action="index.html" method="post">
			<div class="row">
				<div class="one-half column">
					<h3>&nbsp;</h3>
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
					</div>
				</div>
				<div class="one-half column">
					<h3>&nbsp;</h3>
					<div class="wysiwyg button-tray">
						<a href="#" class="bold"> B </a>
						<a href="#" class="italic"> i </a>
					</div>
					<textarea name="name" rows="6" placeholder="Descripción la resolución del pendiente"></textarea>
					<input type="file" name="" value="">
				</div>
			</div>
			<div class="row actions footer">
				<a href="#" class="text-button">Cancelar</a>
				<a href="#" class="button blue resolve">Resolver</a>
			</div>
		</form>
	</div>
</div>

<?php include 'footer.php'; ?>
