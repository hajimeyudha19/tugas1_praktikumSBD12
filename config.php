<?php
$databaseHost = 'localhost';
$databaseName = 'tokovoucher';
$databaseUsername = 'root';
$databasePassword = '';

global $mysqli; 
$mysqli = mysqli_connect($databaseHost, $databaseUsername,
$databasePassword, $databaseName);
?>