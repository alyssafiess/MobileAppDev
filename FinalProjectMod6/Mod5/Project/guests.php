<!DOCTYPE html>
<html>
<head>
<title>RSVPiDo</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class=".img">
      <img src="Images/Img3.jpg" alt="Wedding Photo">
</div>

<div id="topnav" style="padding-top:0px">
  <a href="index.html" class="nav-btn">Save the Date</a>
  <a href="photos.html" class="nav-btn">Engagement Photos</a>
  <a href="maps.html" class="nav-btn">Venue Directions</a>
  <a href="stay.html" class="nav-btn">Nearby Lodging</a>
  <a href="rsvp.php" class="nav-btn">RSVP</a>
</div>

<div class="sidenav">
  <a href="Logo.jpg">
  <img src="Images/Logo.jpg" alt="RSVPiDo" style="width:150px">
  </a>
  <a href="index.html">Save the Date</a>
  <a href="https://www.target.com/gift-registry/" target=_blank>Gift Registry</a>
  <a href="contact.html">Contact Us</a>
  <a href="guests.php">Guests</a>
</div>

<div class="main">
  <h2><center>Attendees</center></h2>
  <p>
    <?php
  include 'config.php';
  include 'opendb.php';

  $sql= "SELECT guestnum, fname, lname FROM guests ORDER BY guestnum ASC";
  $result = mysqli_query($conn, $sql);

  echo "<div id='label-row'><div class='label'>Guest #</div><div class='label'>First Name</div><div class='label'>Last Name</div></div>";

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<div class='info-row'><div class='info'>" . $row['guestnum'] . "</div><div class='info'>" . $row['fname'] . "</div><div class='info'>" . $row["lname"] . "</div></div>";
    }
  } else {
    echo "0 results";
    }

    mysqli_close($conn);
   ?>
 </p>
</div>
</body>
<footer>
  <div class="footnav">
    <a href="index.html" class="foot-btn">Save the Date</a>
    <a href="https://www.target.com/gift-registry/" target=_blank class="foot-btn">Gift Registry</a>
    <a href="contact.html" class="foot-btn">Contact Us</a>
    <a href="guests.php" class="foot-btn">Guests</a>
  </div>
</footer>
</html>
