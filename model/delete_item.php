<?php

$sql = "DELETE from events WHERE id=$id";

$link_address = 'cms.php?action=show';
echo "item deleted<br>";
echo "<a href='".$link_address."'>Index Page</a>";


$mysqli->query($sql);