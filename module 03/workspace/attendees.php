<?php

$servername = "http://mobileappdev.centralus.cloudapp.azure.com";
$username = "afadmin";
$password = "DevNull//1111";
//open connection
$conn = new mysqli($servername, $username, $password);
//check for connection failure

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//retrieve data to display from SQL query
$slq = "SELECT fname, lname, guestnum FROM `RSVPiDo`.`guests`;
$result = mysql_query($conn, $sql);

echo "<div id='label-row'><div class='label'>First Name</div><div class='label'>Last Name</div><dive class='label'>Guest Number</div>"

if (mysql_query($result) > 0) {
  while($row = mysql_query($result)) {
    echo "fname: " . $row["fname"] . "<br>";
    echo "lname: " . $row["lname"] . "<br>";
    echo "guestnum: " . $row["guestnum"] . "<br>";
  }
  else {
  echo "0 results";
  }
}

$mysqli_close($conn);
?>
