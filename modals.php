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
					<div><img src="http://placehold.it/42" alt=""></div>
				</div>
				<div class="info">
					<p>Pedro López te invitó a la junta Junta de Arranque Proyecto Minute App</p>
					<small>5 de marzo, 10:03 am</small>
				</div>
			</li>
			<li class="card">
				<div class="circle profiles">
					<div><img src="http://placehold.it/42" alt=""></div>
				</div>
				<div class="info">
					<p>Pedro López terminó la tarea Agendar Presentación de Prototipo en Definición Inicial Minute</p>
					<small>4 de marzo, 10:03 am</small>
				</div>
			</li>
			<li class="card">
				<div class="circle profiles">
					<div><img src="http://placehold.it/42" alt=""></div>
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
			<img src="http://placehold.it/300" alt="">
		</div>
		<input type="text" name="" value="Francisco Martinez">
		<input type="text" name="" value="paco@martinez.mx">
	</form>
	<hr>
	<div class="stats">
		<div class="stat">
			<div class="number">
				34
			</div>
			<h4>GENERAL</h4>
		</div>
		<div class="stat">
			<div class="number">
				14
			</div>
			<h4>RESUELTOS</h4>
		</div>
		<div class="stat">
			<div class="number">
				24
			</div>
			<h4>ATRASOS</h4>
		</div>
	</div>
	<ul class="options">
		<li><a href="#">Cambiar contraseña</a></li>
		<li><a href="#">Salir de Minute App</a></li>
	</ul>
</div>

<div class="modal profile" id="profile-stats">
	<div class="header">
		<div class="circle profiles">
			<div>
				<img src="http://placehold.it/42" alt="">
			</div>
		</div>
		<h3><strong>Nombre</strong> Apellido</h3>
		<p>nombre@empresa.com</p>
		<a href="#" class="close"></a>
	</div>
	<div class="stats">
		<div class="stat">
			<div class="number">
				34
			</div>
			<h4>GENERAL</h4>
		</div>
		<div class="stat">
			<div class="number">
				14
			</div>
			<h4>RESUELTOS</h4>
		</div>
		<div class="stat">
			<div class="number">
				24
			</div>
			<h4>ATRASOS</h4>
		</div>
	</div>
	<div class="actions single">
		<a href="#" class="text-button">Eliminar de esta junta</a></li>
	</div>
</div>




</body>
</html>
