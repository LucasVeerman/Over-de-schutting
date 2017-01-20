<?php

$sql = "SELECT * FROM events WHERE id= " . $id;

$result = $mysqli->query($sql);
$result = convertResultToArray($result);