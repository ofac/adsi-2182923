<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Hola Mundo</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark"><?php print("Hola Mundo"); ?></h1>
				<hr>
				<p class="text-justify text-muted">
					<?php 	
						echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quia, repellendus! Rerum eius maxime consectetur optio dignissimos mollitia delectus placeat vero, dicta non? Omnis explicabo at fuga, nesciunt deserunt! Expedita!";
					?>
				</p>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>