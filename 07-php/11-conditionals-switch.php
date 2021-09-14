<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Conditional (switch)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-4 offset-md-4">
				<h1 class="text-center text-dark">Conditional (switch)</h1>
				<hr>
				<?php 
					$day = date('n');
					switch ($day) {
						case 1:
							echo '<ul class="list-group">
									  <li class="list-group-item list-group-item-primary">First Trimester</li>
									  <li class="list-group-item active">January</li>
									  <li class="list-group-item">February</li>
									  <li class="list-group-item">March</li>
									</ul>';
							break;
						case 2:
							echo '<ul class="list-group">
									  <li class="list-group-item list-group-item-primary">First Trimester</li>
									  <li class="list-group-item">January</li>
									  <li class="list-group-item active">February</li>
									  <li class="list-group-item">March</li>
									</ul>';
							break;
						case 3:
							echo '<ul class="list-group">
									  <li class="list-group-item list-group-item-primary">First Trimester</li>
									  <li class="list-group-item">January</li>
									  <li class="list-group-item">February</li>
									  <li class="list-group-item active">March</li>
									</ul>';
							break;
						case 4:
							echo '<ul class="list-group">
										  <li class="list-group-item list-group-item-primary">Second Trimester</li>
										  <li class="list-group-item active">April</li>
										  <li class="list-group-item">May</li>
										  <li class="list-group-item">June</li>
										</ul>';
							break;
						case 5:
							echo '<ul class="list-group">
											  <li class="list-group-item list-group-item-primary">Second Trimester</li>
											  <li class="list-group-item">April</li>
											  <li class="list-group-item active">May</li>
											  <li class="list-group-item">June</li>
											</ul>';
							break;				
						case 6:
							echo '<ul class="list-group">
											  <li class="list-group-item list-group-item-primary">Second Trimester</li>
											  <li class="list-group-item">April</li>
											  <li class="list-group-item">May</li>
											  <li class="list-group-item active">June</li>
											</ul>';
							break;
						case 7:
							echo '<ul class="list-group">
									  <li class="list-group-item list-group-item-primary">Third Trimester</li>
									  <li class="list-group-item active">July</li>
									  <li class="list-group-item">August</li>
									  <li class="list-group-item">September</li>
									</ul>';
							break;	
						case 8:
							echo '<ul class="list-group">
									  <li class="list-group-item list-group-item-primary">Third Trimester</li>
									  <li class="list-group-item">July</li>
									  <li class="list-group-item active">August</li>
									  <li class="list-group-item">September</li>
									</ul>';
							break;
						case 9:
							echo '<ul class="list-group">
								  <li class="list-group-item list-group-item-primary">Third Trimester</li>
								  <li class="list-group-item">July</li>
								  <li class="list-group-item">August</li>
								  <li class="list-group-item active">September</li>
								</ul>';
							break;
						default:
							echo '<ul class="list-group">
								  <li class="list-group-item list-group-item-primary">Fourth Trimester</li>
								  <li class="list-group-item active">End of the year</li>
								</ul>';
							break;
					}
				?>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>