<?php
$title = "Delete a Reservation";
include "header.php";

$a = $_GET['id'];
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM quang_reservation WHERE reservation_id = '$a' ");
if (!$result) {
   die('Invalid query: ' . mysqli_error($conn));
}
$row = mysqli_fetch_array($result);
?>
<div class="container-fluid">

<?php
echo "<h2>Delete a reservation.
<br>Reservation code: ". $row['reservation_code']."
<br>To update, book a new one in Reservation page</h2>";
echo "<h2>Name: ".$row['cust_name']."<br></h2>";
echo "<h2>Membership, if any: ".$row['membership_id']."<br></h2>";
echo "<h2>Phone: ".$row['phone_nbr']."<br></h2>";
echo "<h2>Email: ".$row['cust_email']."<br></h2>";
echo "<h2>Date and Time: ".$row['start_datetime']."<br></h2>";
echo "<h2>Table: ".$row['table_id']."<br><br></h2>";
?>

<form method="post" action = "">
  <input type="submit" value=">>> Delete the reservation. Be careful. Cannot Undo! <<<" name="delete"><br><br>
</form>
<?php
  if(isset($_POST['delete'])){
    $query = mysqli_query($conn, "DELETE from quang_reservation where id='$a' ");
  if($query){
    echo "<h4>Record deleted</h4>";
  }
  else {echo "Record not modified";}}
?>
</div>
<?php include "footer.php" ?>