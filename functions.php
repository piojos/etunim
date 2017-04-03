<?php


	// FUNCTIONS

	function card($status = array()) { ?>
		<div class="card <?php echo $status; ?>">
			<a href="<?php
				if(strpos($status, 'meeting')) {
					echo 'junta.php';
				} else {
					echo 'pendiente.php';
				} ?>">
			<?php if(!strpos($status, 'meeting')) { ?>
			<div class="profiles">
				<div>
					<img src="http://placehold.it/42" alt="">
				</div>
				<?php if(!strpos($status, 'single')) {
					echo '
					<div>
						<img src="http://placehold.it/42" alt="">
					</div>';
				} ?>
			</div>
			<?php } ?>
			<div class="title">
				Pendiente normal con varios responsables
			</div>
			<div class="details">
				<div class="incharge">Responsables: <?php
				if(!strpos($status, 'single')) {
					echo '<strong>Luis</strong>, <strong>Edgar</strong>, <strong>María</strong>';
				} else {
					echo '<strong>Luis Herrada</strong>';
				} ?>
				</div>
				<div class="deliver">Entrega: <strong>6 de Abril</strong></div>
			</div>
			<div class="icons">
				<div>
					<img src="http://placehold.it/18" alt="">
					<span>0 / 2</span>
				</div>
				<div>
					<img src="http://placehold.it/18" alt="">
					<span>3</span>
				</div>
			</div>
			<?php if(!strpos($status, 'meeting')) { ?>
			<div class="checkbox">
				<div class="square">
					<div class="check"></div>
				</div>
			</div>
			<?php } ?>
			</a>
		</div><?php
	}

?>
