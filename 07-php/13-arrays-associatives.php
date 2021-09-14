<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Array (Associatives)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2 text-center">
				<h1 class="text-dark">Array (Associatives)</h1>
				<hr>
				<?php 
					$studends = array('Tanjiro Kamado'    => 16, 
						              'Nezuko Kamado'     => 15, 
						              'Zenitsu Agatsuma'  => 17,
						              'Inosuke Hashibira' => 18);
					$studends['Genya Shinazugawa'] = 20;
					$studends['Kanao Tsuyuri']     = 19;

					//var_dump($studends);
				?>
				<div class="btn-group-vertical">
				<?php foreach ($studends as $key => $value): ?>
					<button type="button" class="btn btn-dark text-start">
						<?php echo $key ?>
						<span class="badge bg-danger float-end"><?php echo $value ?></span>
					</button>
				<?php endforeach ?>
				</div>
				
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>