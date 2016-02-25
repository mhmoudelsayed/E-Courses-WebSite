<?php
require 'db_connect.php';
$sql__dep = "SELECT * FROM departments";
$data__dep = $conn->query($sql__dep);
$result__dep=$data__dep->fetch_assoc();
var_dump($result__dep);
 ?>
