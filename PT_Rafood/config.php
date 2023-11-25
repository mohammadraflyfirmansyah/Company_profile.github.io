<?php 
// Assuming your database credentials
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pt_rafood";

// Create a database connection
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check the connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

?>