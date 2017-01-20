<?php

$sql = "SELECT * from events";
$result = $mysqli->query($sql);
$result = convertResultToArray($result);