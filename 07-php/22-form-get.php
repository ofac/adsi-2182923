<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form (GET)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<h1 class="text-center text-dark">Form (GET)</h1>
				<hr>
				<form action="" method="GET">
					<div class="mb-3">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" id="name">
					</div>
					<div class="mb-3">
						<label for="email">Email:</label>
						<input type="email" class="form-control" name="email" id="email">
					</div>
					<div class="mb-3">
						<input type="submit" class="btn btn-success" value="Send Form">
						<input type="reset" class="btn btn-light" value="Clean Form">
					</div>
				</form>
				<?php if ($_GET): ?>
					<div class="alert alert-success">
						<strong>Name:</strong> <?php echo $_GET['name']; ?>
						<br>
						<strong>Email:</strong> <?php echo $_GET['email']; ?>
					</div>
				<?php endif ?>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>