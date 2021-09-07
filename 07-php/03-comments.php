<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Comments</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark">Comments</h1>
				<hr>
				<?php 
				// Define classes of button
				$classes = "btn btn-lg btn-outline-dark";
				/*
					btn                 = Button
					btn-lg              = Button Large
					btn-outline-primary = Button Border Blue
				*/
				# Print variable $classes inside of class
				?>
				<div class="d-grid">
					<a href="javascript:;" class="<?=$classes?>"> This is a Button </a>
				</div>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>