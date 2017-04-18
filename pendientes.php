<?php

	$headClass = 'blue';
	include 'header.php'; ?>

	<div class="container">
		<div class="row">
			<div class="three columns sidebar filter">
				<form class="" action="#" method="post">
					<ul>
						<li class="calendar">
							<div class="title">
								<a href="#" class="nav prev"><img src="img/ic-arr.svg" alt="Previous Month"></a>
								<a href="#">Abril 2017</a>
								<a href="#" class="nav next"><img src="img/ic-arr.svg" alt="Next Month"></a>
							</div>
							<div class="month" style="display:none">
								<?php include 'inc/calendar.php'; ?>
							</div>
						</li>
						<li class="search">
							<div>
								<input type="text" placeholder="Busca un pendiente" name="" value="">
								<button type="button" name="button"><img src="img/ic-search.svg" alt=""></button>
							</div>
						</li>
						<li>
							<div class="dropdown">
								<select class="" name="">
									<option value="">Todos los Usuarios</option>
									<option value="">Martín Martinez</option>
									<option value="">Gonzalo Gonzalez</option>
									<option value="">Domingo Domínguez</option>
									<option value="">Ana Ancira</option>
								</select>
							</div>
						</li>
						<li>
							<div class="dropdown">
								<select class="" name="">
									<option value="">Etiqueta</option>
									<option value="">Productividad</option>
									<option value="">Administración</option>
									<option value="">MinuteApp</option>
								</select>
							</div>
						</li>
						<li>
							<div class="dropdown">
								<select class="" name="">
									<option value="">Prioridad</option>
									<option value="">Alta</option>
									<option value="">Media</option>
									<option value="">Baja</option>
								</select>
							</div>
						</li>
						<li>
							<div class="dropdown">
								<select class="" name="">
									<option value="">Junta</option>
									<option value="">Productividad</option>
									<option value="">Administración</option>
									<option value="">MinuteApp</option>
								</select>
							</div>
						</li>
						<li>
							<div class="tick-button">
								<input type="checkbox" name="showdone" id="showdone" value="showdone">
								<label for="showdone">Mostrar Resueltos</label>
							</div>
						</li>
					</ul>
				</form>
				<div class="actions">
					<p>Filtrando...</p>
				</div>
			</div>


			<div class="nine columns listings">
				<h2>Pendientes para <strong>Abril 5</strong></h2>

				<div class="cards"><?php
					echo card('long overdue');
					echo card('long single');
					echo card('long done'); ?>
				</div>

				<h2>Pendientes para <strong>Abril 9</strong></h2>

				<div class="cards"><?php
					echo card('long single');
					echo card('long '); ?>
				</div>

				<h2>Pendientes para <strong>Abril 10</strong></h2>

				<div class="cards"><?php
					echo card('long single');
					echo card('long single');
					echo card('long '); ?>
				</div>

				<div class="loadcard">
					<p>Filtrando...</p>
				</div>
			</div>
		</div>
	</div>


<?php include 'footer.php'; ?>
