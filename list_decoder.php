<?php
$url = "list.json";
$data = file_get_contents($url);
$list = json_decode($data, true);
 ?>
