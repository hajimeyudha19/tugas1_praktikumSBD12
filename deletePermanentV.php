<?php
// include database connection file
include_once("config.php");
// Get id from URL to delete that data
$id = $_GET['id'];
// Delete data row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM valorant WHERE id_valo=$id");
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>