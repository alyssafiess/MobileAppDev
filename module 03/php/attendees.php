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
