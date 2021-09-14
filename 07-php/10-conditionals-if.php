<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Conditional (if-else-elseif)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2 text-center">
				<h1 class="text-dark">Conditional (if-else-elseif)</h1>
				<hr>
				<?php $day = date('D'); ?>
				<?php if ($day == "Mon"): ?>
					<span class="badge rounded-pill bg-warning">Today is Monday</span>
				<?php elseif ($day == "Tue"): ?>
					<span class="badge rounded-pill bg-warning">Today is Tuesday</span>
				<?php elseif ($day == "Wed"): ?>
					<span class="badge rounded-pill bg-warning">Today is Wednesday</span>
				<?php elseif ($day == "Thu"): ?>
					<span class="badge rounded-pill bg-warning">Today is Thursday</span>
				<?php elseif ($day == "Fri"): ?>
					<span class="badge rounded-pill bg-warning">Today is Friday</span>
				<?php else: ?>
					<span class="badge rounded-pill bg-success">Happy Weekend</span>
				<?php endif ?>
			</div>
			
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>