<?php

$dbhost = 'https://opum2.github.io/dashboard';
$dbuser = 'root';
$dbpass = '';
$db = 'database';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
