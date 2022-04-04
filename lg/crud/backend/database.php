<?php
$servername = "localhost";
$username = "jc";
$password = "1549100";
$dbname = "studentvote";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>