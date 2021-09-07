<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Operators Logics</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark">Operators Logics</h1>
				<hr>
				<table class="table table-bordered table-striped table-hover table-dark">
					<thead class="bg-secondary text-uppercase">
						<tr>
							<th>Operator</th>
							<th>Description</th>
							<th>Example</th>
							<th>Result</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> && </td>
							<td> AND </td>
							<td>$x=6; $y=3; ($x<10 && $y>1)</td>
							<td>
								<?php 
									$x=6; 
									$y=3;
									echo var_dump($x<10 && $y>1); 
								?>
							</td>
						</tr>
						<tr>
							<td> || </td>
							<td> OR </td>
							<td>$x=6; $y=3; ($x==5 || $y==5)</td>
							<td>
								<?php 
									$x=6; 
									$y=3;
									echo var_dump($x==5 || $y==5); 
								?>
							</td>
						</tr>
						<tr>
							<td> ! </td>
							<td> NOT </td>
							<td>$x=6; $y=3; !($x==$y)</td>
							<td>
								<?php 
									$x=6; 
									$y=3;
									echo var_dump(!($x==$y)); 
								?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>