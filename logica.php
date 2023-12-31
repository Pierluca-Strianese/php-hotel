<?php
include_once __DIR__ . '/data.php';

function filter_condition($hotel, $parking) {
	$condition_parking = true;
	if ($parking) {
		$condition_parking = $hotel['parking'];
	}

	return $condition_parking;
}

function print_row($hotel) { ?>
	<tr>
		<th scope="row"><?= $hotel['name'] ?></th>
		<td><?= $hotel['description'] ?></td>
		<td><i class="bi <?= $hotel['parking'] ? 'bi-check-circle-fill text-success' : 'bi-x-circle-fill text-danger' ?>"></i></td>
		<td><?= $hotel['vote'] ?></td>
		<td><?= $hotel['distance_to_center'] ?></td>
	</tr><?php
}

$parking = isset($_GET['parking']);

$arr_filtered = array_filter($hotels, fn ($hotel) => filter_condition($hotel, $parking));
