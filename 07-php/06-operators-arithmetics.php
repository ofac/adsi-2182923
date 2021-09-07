<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Operators Arithmetics</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark">Operators Arithmetics</h1>
				<hr>
				<?php 
					$x = 2;
				?>
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
							<td> + </td>
							<td> Addition </td>
							<td>$x=2; $x+2;</td>
							<td><?php echo $x=$x+2; ?></td>
						</tr>
						<tr>
							<td> - </td>
							<td> Subtraction </td>
							<td>$x=2; 5-$x;</td>
							<td>
								<?php 
									$x=2; 
									echo $x=5-$x; 
								?>
							</td>
						</tr>
						<tr>
							<td> * </td>
							<td> Product </td>
							<td>$x=4; $x*5;</td>
							<td>
								<?php 
									$x=4; 
									echo $x=$x*5; 
								?>
							</td>
						</tr>
						<tr>
							<td> / </td>
							<td> Division </td>
							<td>15/5;</td>
							<td>
								<?php echo 15/5; ?>
							</td>
						</tr>
						<tr>
							<td> % </td>
							<td> Remainder </td>
							<td>5%2;</td>
							<td>
								<?php echo 5%2; ?>
							</td>
						</tr>
						<tr>
							<td> ++ </td>
							<td> Increment </td>
							<td>$x=5; $x++;</td>
							<td>
								<?php 
									$x = 5;
									echo $x++;
								?>
							</td>
						</tr>
						<tr>
							<td> ++ </td>
							<td> Increment </td>
							<td>$x=5; ++$x;</td>
							<td>
								<?php 
									$x = 5;
									echo ++$x;
								?>
							</td>
						</tr>
						<tr>
							<td> -- </td>
							<td> Decrement </td>
							<td>$x=5; --$x;</td>
							<td>
								<?php 
									$x = 5;
									echo --$x;
								?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>