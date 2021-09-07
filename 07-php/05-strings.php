<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Strings</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-10 offset-md-1">
				<h1 class="text-center text-dark">Strings</h1>
				<hr>
				<?php 
					// Concatenate
					$tbl1  = 'table';
					$tbl2  = 'table-bordered';
					$tbl3  = 'table-hover table-dark';
					$class = $tbl1." ".$tbl2." ".$tbl3." table-striped";
					// Cadenas
					$string1 = "ADSI 2182923";
					$string2 = "sena caldas";
					$string3 = "Hello World";

				?>
				<table class="<?php echo $class; ?>">
					<thead class="text-uppercase">
						<tr>
							<th>Method</th>
							<th>Description</th>
							<th>String</th>
							<th>Result</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>strlen()</td>
							<td>String Length</td>
							<td><?php echo $string1; ?></td>
							<td><?php echo strlen($string1); ?></td>
						</tr>
						<tr>
							<td>strpos()</td>
							<td>Position Match String</td>
							<td>2182923</td>
							<td><?php echo strpos($string1, '2182923'); ?></td>
						</tr>
						<tr>
							<td>strtoupper()</td>
							<td>Uppercase String</td>
							<td><?php echo $string2; ?></td>
							<td><?php echo strtoupper($string2); ?></td>
						</tr>
						<tr>
							<td>ucwords()</td>
							<td>Uppercase first letter</td>
							<td><?php echo $string2; ?></td>
							<td><?php echo ucwords($string2); ?></td>
						</tr>
						<tr>
							<td>strrev()</td>
							<td>Reverse String</td>
							<td><?php echo $string2; ?></td>
							<td><?php echo strrev($string2); ?></td>
						</tr>
						<tr>
							<td>str_replace()</td>
							<td>Replace String</td>
							<td><?php echo $string3; ?></td>
							<td><?php echo str_replace("Mundo", "Jeremias", $string3); ?></td>
						</tr>
						<tr>
							<td>substr()</td>
							<td>Substraer Cadena</td>
							<td><?php echo $string3; ?></td>
							<td><?php echo substr($string3, 5, 9); ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>