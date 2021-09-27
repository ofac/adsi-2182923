<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Challenge (Date/Time)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<h1 class="text-center text-dark">Challenge (Date/Time)</h1>
				<hr>
				<form action="" method="POST">
					<div class="mb-3">
						<label for="birthdate"> Birth Date: </label>
						<input type="date" id="birthdate" name="birthdate" class="form-control" placeholder="mm/dd/yyyy">
					</div>
					<div class="mb-3">
						<button type="submit" class="btn btn-outline-success"> Calculate Age </button>
					</div>
				</form>
				<?php 
					if($_POST) {
						$bd    = $_POST['birthdate'];
						var_dump($bd);

					}
				?>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>