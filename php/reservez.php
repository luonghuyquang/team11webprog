<?php
// validation and display for the reservation page
  if (isset($_POST['submit'])){
    // Receive the data from form input
    $cust_name = $_POST['cust_name'];
    $phone_nbr = $_POST['phone_nbr'];
    $cust_email = $_POST['cust_email'];
    $nbr_of_guests = $_POST['nbr_of_guests'];
    $table_id = $_POST['table_id'];
    $special_request = $_POST['special_request'];
    $party_date = $_POST['party_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    // Generate the random unique reservation code
    $reservation_code = substr(md5(uniqid(mt_rand(), true)), 0, 6);
    // Intermediate variables, convert the user input into Unix timestamps
    $start_timestamp = strtotime($party_date . ' ' . $start_time);
    $end_timestamp = strtotime($party_date . ' ' . $end_time);
    // Generate datetimes by converting the timestamps into MySQL datetime format
    $start_datetime = date('Y-m-d H:i:s', $start_timestamp);
    $end_datetime = date('Y-m-d H:i:s', $end_timestamp);

    include 'restodb.php';
    $sql = "INSERT into quang_reservation(reservation_code, cust_name, phone_nbr, cust_email, start_datetime, end_datetime, nbr_of_guests, special_request, table_id)
    VALUES('$reservation_code', '$cust_name', '$phone_nbr', '$cust_email', '$start_datetime', '$end_datetime', '$nbr_of_guests', '$special_request', '$table_id')";
    
    $table_name = "";
    $sql_table = "SELECT * FROM quang_tables WHERE table_id='$table_id'";
    $result_table = $conn->query($sql_table);
    if ($result_table->num_rows > 0) {
        $row_table = $result_table->fetch_assoc();
        $table_name = $row_table["table_name"];
    echo "<h4>You have successfully reserved $table_name <br>
         for $party_date from $start_time to $end_time <br>
        Your reservation code is $reservation_code <br>
        Looking forward to welcoming and serving you! Nahdaan!</h4>";
    }
    else {
      echo "Error: ".$conn->error;
    }
  }
?>