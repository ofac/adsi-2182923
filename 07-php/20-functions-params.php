<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Functions Params</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-6 offset-md-3 text-center">
				<h1 class="text-dark">Functions Params</h1>
				<hr>
				<?php 
                    function showInfo($name, $description) {
                        echo "<h1 class='display-3'>". $name ." </h1>";
                        echo "<p class='lead'>". $description ." </p>";

                    }
                ?>
                <div class="bg-dark text-light p-2 rounded">
                    <div class="container">
                        <?php 
                            $description = "Lorem Ipsum Dolor Sit Amet";
                            showInfo('Saitama', $description);
                            showInfo('Garou', 'Consectetur Adipisicing Elit');
                        ?>
                    </div>
                </div>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>