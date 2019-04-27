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
<div class="topnav" style="padding-top:10px">
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
  <h4><center>Attendees</center></h4>
    <?php
  include 'config.php';
  include 'opendb.php';

  $sql= "SELECT guestnum, fname, lname FROM guests ORDER BY guestnum ASC";
  $result = mysqli_query($conn, $sql);

  echo "<div id='label-row'><div align= center><div class='label'>Guest Number</div><div class='label'>First Name</div><div class='label'>Last Name</div></div></div>";

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<div class='info-row'><div align= center><div class='info'>" . $row['guestnum'] . "</div><div class='info'>" . $row['fname'] . "</div><div class='info'>" . $row["lname"] . "</div></div></div>";
    }
  } else {
    echo "0 results";
    }

    mysqli_close($conn);
   ?>

 </center>
</body>
</html>
