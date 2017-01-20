<?php

$mysqli = new mysqli("localhost", "root", "", "edamvdam", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
   
    $name=$_REQUEST['name'];
    $text=$_REQUEST['text'];
    $link_address = '../cms.php?action=show';
    
    
    $sql="INSERT INTO events "; // LET OP DE SPATIE!
    $sql.="(id, name, text)";
    $sql.=" VALUES ";
    $sql.="(NULL, '".$name."','".$text."');";

    if (mysqli_query($mysqli, $sql)) {
        echo "<h1 id='gelukt'> item is aangemaakt </h1>";

        echo "<a href='".$link_address."'>Keer terug</a>";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
    
?>