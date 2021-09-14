<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Array (Numeric Index)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2 text-center">
				<h1 class="text-dark">Array (Numeric Index)</h1>
				<hr>
				<?php 
					# Automatic Index
					$cars = array('Volkswagen', 'Toyota', 'Renault');
					# Manual Index
					$cars[3] = 'Fiat';
					$cars[4] = 'Mazda';
					$cars[5] = 'Chevrolet';

					//var_dump($cars);
				?>
				<div class="btn-group btn-group-lg">
				<?php foreach ($cars as $car): ?>
					<button type="button" class="btn btn-outline-danger">
						<?php echo $car ?>
					</button>
				<?php endforeach ?>
				</div>
				
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>