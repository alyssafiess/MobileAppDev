<?php

$servername = "localhost";
$username = "afadmin";
$password = "DevNull//1111";
//open connection
$conn = mysqli($servername, $username, $password);
//check for connection failure

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
