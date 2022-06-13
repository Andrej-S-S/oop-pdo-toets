<?php

require("./functie.php");



$db->query("SELECT `id`, `merk`, `model`, `topsnelheid`, `prijs` FROM `car`; ");

$result = $db->resultSet();

$rows = '';



?>