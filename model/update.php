<?php

$mysqli = new mysqli("localhost", "root", "", "edamvdam", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

    
    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $text=$_REQUEST['text'];
    
    
    $link_address = '../cms.php?action=show';
    
    $sql = "UPDATE events SET name='$name', text='$text' WHERE id='$id'";



    if (mysqli_query($mysqli, $sql)) {
        echo "<h1 id='gelukt'> item is veranderd </h1>";

        echo "<a href='".$link_address."'>Keer terug</a>";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
    
?>