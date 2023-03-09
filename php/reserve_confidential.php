<?php
$title = "Management_Reservation";
include "header.php" ?>
<?php

include 'db.php';
$sql_reservation = "SELECT * from quang_reservation";
$result = $conn->query($sql_reservation);

if ($result !== False && $result->num_rows > 0)
{
  echo"
    <table class = table>
      <tr>
        <th>ID</th>
        <th>Code</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Start</th>
        <th>End</th>
        <th>Guests</th>
        <th>Special</th>
        <th>Table</th>
        <th>Submitted</th>
        <th>Membership</th>
      </tr>";
  while($row = $result -> fetch_assoc())
  {
  echo"
      <tr>
        <td><a href = 'reserve_update.php?id=$row[reservation_id]'>$row[reservation_id]</td>
        <td>$row[reservation_code]</td>
        <td>$row[cust_name]</td>
        <td>$row[phone_nbr]</td>
        <td>$row[cust_email]</td>
        <td>$row[start_datetime]</td>
        <td>$row[end_datetime]</td>
        <td>$row[nbr_of_guests]</td>
        <td>$row[special_request]</td>
        <td>$row[table_id]</td>
        <td>$row[created_at]</td>
        <td>$row[membership_id]</td>
      </tr>";
  }
  echo "</table>";
}
else {
  echo "No data recorded";
}
$conn->close();

?>
<?php include "footer.php" ?>