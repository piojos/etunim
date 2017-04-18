<?php

	$headClass = 'teal';
	include 'header.php'; ?>

	<div class="container">
		<div class="row">
			<div class="three columns sidebar searchable">
				<div class="search">
					<form class="" action="#" method="post">
						<input type="text" placeholder="Busca una junta" name="" value="">
						<button type="button" name="button"><img src="img/ic-search.svg" alt=""></button>
					</form>
				</div>

				<div class="results">
					<a href="#" class="tag">Minuteapp</a>
					<a href="#" class="tag active">Business</a>
					<a href="#" class="tag">Fomento Geek</a>
					<a href="#" class="tag">Sprint</a>
					<a href="#" class="tag">Scope</a>
					<a href="#" class="tag">Toolbox</a>
					<a href="#" class="tag">Desarrollo</a>
					<a href="#" class="tag">Diseño</a>
					<a href="#" class="tag">BMC</a>
				</div>

				<div class="actions">
					<p class="loading">Filtrando...</p>
				</div>
			</div>


			<div class="nine columns listings">
				<h2>Etiquetas: <span class="tag">Business</span></h2>

				<div class="cards"><?php
					echo card('long overdue');
					echo card('long single');
					echo card('long done');
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
