<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form (POST)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<h1 class="text-center text-dark">Form (POST)</h1>
				<hr>
				<form action="" method="POST">
					<div class="mb-3">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" id="name" required>
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
				<?php if ($_POST): ?>
					<div class="alert alert-success">
						<strong>Name:</strong> <?php echo $_POST['name']; ?>
						<br>
						<strong>Email:</strong> <?php echo $_POST['email']; ?>
					</div>
				<?php endif ?>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>