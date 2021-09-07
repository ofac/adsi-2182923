<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Variables</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark">Variables</h1>
				<hr>
				<?php 
					$alert1   = 'alert alert-success alert-dismissible fade show';
					$alert2   = 'alert alert-warning alert-dismissible fade show';
					$alert3   = 'alert alert-danger alert-dismissible fade show';
					$user1 = 1;
					$user2 = 2;
					$user3 = 3;
				?>

				<div class="<?php echo $alert1; ?>"> 
					<strong>The User <?php echo $user1; ?> meets the entry requirements</strong>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				</div>
				<div class="<?php echo $alert2; ?>"> 
					<strong>User information <?php echo $user2; ?> is incomplete</strong>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				</div>
				<div class="<?php echo $alert3; ?>"> 
					<strong>The User <?php echo $user3; ?> is not registered</strong>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				</div>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>