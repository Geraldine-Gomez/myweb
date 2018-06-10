<?php

include ('templates/head.php');

if (isset($_GET['error'])){
	
	include ('errors/errors.php');
}

?>

<div class="container">
	<div class="row">
		<div class="div-img">

				<figure>
					<?php include('partials/genre.php') ?>
				</figure>

		</div>

		<div class="col-6 bienvenido">
			<h2 class="bienve">Bienvenid@: <i>

				<?php 
				if (isset($_SESSION['usuario'])){
					echo $_SESSION['usuario'];
				}
				?>
					
			</i> </h2>
		</div>

		<div class="col-12">
			<?php include ('forms/form_rd.php'); ?> 
		</div>

	</div>
</div>

<?php include ('templates/foot.php'); ?>