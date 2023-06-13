<?php
include_once __DIR__ . '/logica.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hotels</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
		defer></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
	<div class="container">
		<h1>Hotels</h1>

		<form class="row row-cols-lg-auto g-3 align-items-center" action="" method="get">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="parking" name="parking" <?= $parking ? 'checked' : '' ?>>
				<label class="form-check-label" for="parking">
					Solo con parcheggio
				</label>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Descrizione</th>
					<th scope="col">Parcheggio</th>
					<th scope="col">Rating</th>
					<th scope="col">Distanza dal centro (km)</th>
				</tr>
			</thead>

			<tbody><?php
				foreach($arr_filtered as $hotel) {
					print_row($hotel);
				} ?>
			</tbody>
		</table>
	</div>
</body>

</html>