<?php

$conn=mysqli_connect("localhost","root","");
if (!$conn) {
    die('Not connected  to the database: ' . mysqli_error());
}

$db_selected = mysqli_select_db("ethics_system", $conn);
if (!$db_selected) {
    die ("Can't use your_database_name : " . mysqli_error());
}

?>