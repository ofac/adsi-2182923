<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Functions</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-6 offset-md-3 text-center">
				<h1 class="text-dark">Functions</h1>
				<hr>
				<?php 
                    function showFullName() {
                        echo "Homero Simpson";
                    }
                ?>
                <div class="bg-dark text-light p-2 rounded">
                    <div class="container">
                        <h2 class="display-3"><?php showFullName(); ?></h2>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ad reprehenderit, laboriosam quaerat accusantium totam ipsa temporibus corporis nesciunt dolores vitae repellendus cumque vel, facere laborum! Tempore possimus magni vero.
                        </p>
                    </div>
                </div>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>