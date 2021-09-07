<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Operators Comparison</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark">Operators Comparison</h1>
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
							<td> == </td>
							<td> Is equal to </td>
							<td>5==8;</td>
							<td><?php echo var_dump(5==8); ?></td>
						</tr>
						<tr>
							<td> != </td>
							<td> Is not equal to </td>
							<td>5!=8;</td>
							<td><?php echo var_dump(5!=8); ?></td>
						</tr>
						<tr>
							<td> <> </td>
							<td> Is not equal to </td>
							<td>5<>8;</td>
							<td><?php echo var_dump(5<>8); ?></td>
						</tr>
						<tr>
							<td> > </td>
							<td> Is greater than </td>
							<td>5>8;</td>
							<td><?php echo var_dump(5>8); ?></td>
						</tr>
						<tr>
							<td> < </td>
							<td> Is less than </td>
							<td>5<8;</td>
							<td><?php echo var_dump(5<8); ?></td>
						</tr>
						<tr>
							<td> >= </td>
							<td> Is greater than or equal to </td>
							<td>5>=8;</td>
							<td><?php echo var_dump(5>=8); ?></td>
						</tr>
						<tr>
							<td> <= </td>
							<td> Is less than or equal to </td>
							<td>5<=8;</td>
							<td><?php echo var_dump(5<=8); ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>