<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions (Return)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark">Functions (Return)</h1>
				<hr>
				<?php 
					function show_name($name) {
						return $name;
					}
					function show_result($n1, $n2) {
						return $n1 * $n2;
					}
				?>
				<div class="bg-dark text-light p-2 rounded text-center">
                    <div class="container">
						<h1 class="display-4">
							<?php echo show_name('Hanamichi Sakuragi'); ?>
						</h1>
				    	<p class="lead"> 17 * 5 = 
							<?php $result = show_result(17, 5); ?>
							<?php echo $result; ?>
						</p>
                    </div>
                </div>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>