<?php
  include 'config.php';
  include 'opendb.php';

  $sql = "SELECT guestnum, fname, lname FROM guests LIMIT 10;"
  $result = mysqli_query($conn,$sql);

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
