<!DOCTYPE html>
<html>
<head>
<title>RSVPiDo</title>
<link rel="stylesheet" href="CSS/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
    include 'config.php';
    include 'opendb.php';

    //retrieve data to display from SQL query
    $slq= "SELECT guestnum, fname, lname FROM guests ORDER BY guestnum ASC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "guestnum: " . $row["guestnum"] . "<br>";
        echo "fname: " . $row["fname"] . "<br>";
        echo "lname: " . $row["lname"] . "<br>";
      }
    } else {
      echo "0 results";
      }

      mysqli_close($conn);

      ?>
</div>
</center>
</body>
</html>
