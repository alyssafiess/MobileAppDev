<!DOCTYPE html>
<php>
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
<div class="topnav" style="padding-left:125px" style="padding-top:10px">
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
  <?php

  $slq = "SELECT fname, lname, guestnum FROM `guests`;
  $result = mysql_query($conn, $sql);

  echo "<div id='label-row'><div class='label'>First Name</div><div class='label'>Last Name</div><dive class='label'>Guest Number</div>"

  if (mysql_query($result) > 0) {
    while($row = mysql_query($result)) {
      echo "fname: " . $row["fname"] . "<br>";
      echo "lname: " . $row["lname"] . "<br>";
      echo "guestnum: " . $row["guestnum"] . "<br>";
    }
  } else {
    echo "0 results";
  }

  mysql_close($conn);
  ?>
  <a target="_blank" href="Img4.jpg">
  <thumbimg src="Images/Img4.jpg" alt="Engagement Rings" style="width:150px">
</a>Sem nisi suscipit primis commodo facilisi ad natoque, ante imperdiet cum ligula duis platea, a fermentum purus feugiat himenaeos cubilia. Sodales sociis consequat lobortis sagittis suscipit facilisis torquent est risus, ante cursus nascetur conubia neque dignissim posuere facilisi phasellus condimentum, iaculis penatibus sollicitudin commodo mollis enim proin nulla. Etiam aenean cum at vivamus erat sociis integer dui nibh class auctor iaculis, ac molestie est condimentum ultricies dignissim parturient venenatis felis lobortis.</p>
</center>
</div>
</body>
</html>