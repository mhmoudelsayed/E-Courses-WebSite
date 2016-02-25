<?php

// Create connection local


$hostname = "localhost";
$username = "root";
$password = "3121";
$dbname = "ecourses";



// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
