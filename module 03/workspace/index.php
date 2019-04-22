<!DOCTYPE html>
<html>
<head>
<title>RSVPiDo</title>
<link rel="stylesheet" href="CSS/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class=".slidshow-container">
    <img src="Images/Img3.jpg" alt="Wedding Photo">
</div>
<div class="topnav" style="padding-right: 0px" style="padding-top:10px">
  <a class="active" href="#home">Save the Date</a>
  <a href="#photos">Engagement Photos</a>
  <a href="#directions">Venue Directions</a>
  <a href="#hotel">Nearby Lodging</a>
  <a href="#rsvp">RSVP</a>
</div>

<div class="sidenav">
  <a href="Logo.jpg">
  <img src="Images/Logo.jpg" alt="RSVPiDo" style="width:150px">
  </a>
  <a href="#home">Save the Date</a>
  <a href="#registry">Gift Registry</a>
  <a href="#contact">Contact Us</a>
</div>

<div class="main">
  <h3><center>Saturday May 11th, 2019</h3>
  <h4><center>Attendee's</center></h4>
  <p>
<?php
include 'config.php';
include 'opendb.php';

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//retrieve data to display from SQL query
$slq = "SELECT fname, lname, guestnum FROM `RSVPiDo`.`guests`;
$result = mysql_query($conn, $sql);

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
</p>
</center>
</div>
</body>
</html>
