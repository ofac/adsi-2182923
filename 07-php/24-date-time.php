<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Date/Time</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<h1 class="text-center text-dark">Date/Time</h1>
				<hr>
				<div class="bg-dark text-light p-2 rounded">
					<p class="lead text-center">
						<strong>hour-minutes-seconds: </strong>
						<?php echo date('h:i:s') ?>
					</p>
					<p class="lead text-center">
						<strong>day-month-year: </strong>
						<?php echo date('d-m-Y') ?>
					</p>
					<p class="lead text-center">
						<strong>Name Day: </strong>
						<?php echo date('l') ?>
					</p>
					<p class="lead text-center">
						<strong>Full Year: </strong>
						<?php echo date('Y') ?>
					</p>
					<p class="lead text-center">
						<strong>Time Zone: </strong>
						<?php echo date('e') ?>
					</p>
					<p class="lead text-center">
						<strong>Time UNIX: </strong>
						<?php echo time() ?>
					</p>
				</div>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>