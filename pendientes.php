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
							<?php echo dropdownProfiles(); ?>
						</li>
						<li>
							<div class="nice dropdown checkbox" id="choose_tags">
								<div class="previewlabel">Etiquetas</div>
								<div class="heightlimit">
									<ul id="div-tick">
										<li>
											<div class="tick-button">
												<input type="checkbox" name="choose_tags" id="Productividad" title="Productividad">
												<label for="Productividad">Productividad</label>
											</div>
										</li>
										<li>
											<div class="tick-button">
												<input type="checkbox" name="choose_tags" id="Administración" title="Administración">
												<label for="Administración">Administración</label>
											</div>
										</li>
										<li>
											<div class="tick-button">
												<input type="checkbox" name="choose_tags" id="MinuteApp" title="MinuteApp">
												<label for="MinuteApp">MinuteApp</label>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
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
						</li>
						<li>
							<div class="nice dropdown checkbox" id="choose_meeting">
								<div class="previewlabel">Junta</div>
								<div class="heightlimit">
									<ul id="div-tick">
										<li>
											<div class="tick-button">
												<input type="checkbox" name="choose_meeting" id="uniqueID_1203293" title="Brainstorm de Productividad">
												<label for="uniqueID_1203293">Brainstorm de Productividad</label>
											</div>
										</li>
										<li>
											<div class="tick-button">
												<input type="checkbox" name="choose_meeting" id="uniqueID_1232293" title="Revisión de administración interna">
												<label for="uniqueID_1232293">Revisión de administración interna</label>
											</div>
										</li>
										<li>
											<div class="tick-button">
												<input type="checkbox" name="choose_meeting" id="uniqueID_1weew93" title="Introducción a MinuteApp">
												<label for="uniqueID_1weew93">Introducción a MinuteApp</label>
											</div>
										</li>
									</ul>
								</div>
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
