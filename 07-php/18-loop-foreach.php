<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Loop (For Each)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		button.btn-custom { 
			background-color: #721c8a; 
			color: #fff;
		}
		button.btn-custom:hover {
			color: #fff;
			background-color: #5a1771; 
		}
	</style>
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-4 offset-md-4 text-center">
				<h1 class="text-dark">Loop (For Each)</h1>
				<hr>
				<?php 
					$buttons = array('btn-danger', 'btn-warning', 'btn-success', 'btn-primary', 'btn-info', 'btn-secondary', 'btn-dark', 'btn-light', 'btn-link', 'btn-custom');
				?>
				<div class="d-grid">
				<?php foreach ($buttons as $button): ?>
					<button class="btn btn-lg btn-block <?php echo $button; ?> mb-2">
						<?php echo $button; ?>
					</button>
				<?php endforeach ?>
				</div>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>