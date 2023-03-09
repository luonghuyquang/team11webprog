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
    $membership_id = $_POST['membership_id'];
    // Generate the random unique reservation code
    $reservation_code = substr(md5(uniqid(mt_rand(), true)), 0, 6);
    // Intermediate variables, convert the user input into Unix timestamps
    $start_timestamp = strtotime($party_date . ' ' . $start_time);
    $end_timestamp = strtotime($party_date . ' ' . $end_time);
    // Generate datetimes by converting the timestamps into MySQL datetime format
    $start_datetime = date('Y-m-d H:i:s', $start_timestamp);
    $end_datetime = date('Y-m-d H:i:s', $end_timestamp);
    // Variables for management and validation
    $submission_time = time();
    // VALIDATIONS
    // Validate the submission moment at least 24 hours before the desired time
    if (($start_timestamp - $submission_time) < (24 * 60 * 60)) {
        // Display an error message and do not save the reservation
        echo "<h6><i>Error: Reservation must be made at least 24 hours in advance. <br>Please modify your reservation.</i></h6>";
        exit;
    }
    // Validate the desired time not earlier than 4 weeks (28 days) from the submission moment 
    if (($start_timestamp - $submission_time) > (28* 24 * 60 * 60)) {
        // Display an error message and do not save the reservation
        echo "<h6><i>Error: Reservation must be within 4 weeks. <br>Please modify your reservation.</i></h6>";
         exit;
    }
    // Validate the reservation min duration of 30 minutes
    if (($end_timestamp - $start_timestamp) < (30 * 60)) {
        // Display an error message and do not save the reservation
         echo "<h6><i>Error: The reservation must be for at least 30 minutes. <br>Please modify your reservation.</i></h6>";
        exit;
    }
    // Validate the reservation max duration of 180 minutes
    if (($end_timestamp - $start_timestamp) > (180 * 60)) {
        // Display an error message and do not save the reservation
        echo "<h6><i>Error: The reservation must be not longer than 180 minutes. <br>Please modify your reservation.</i></h6>";
        exit;
        }
    // Get form input values
    include 'db.php';
    // Validate number of guests not exceeding seats per table
    $sql_seat = "SELECT seats FROM quang_tables WHERE table_id='$table_id'";
    $result_table = $conn->query($sql_seat);
    if ($result_table->num_rows > 0) {
    $row_table = $result_table->fetch_assoc();
    $seats = $row_table["seats"];
        if ($nbr_of_guests > $seats) {
            // Display an error message to the user
            echo "Sorry, there are not enough seats available at the selected table. Please choose a different table or call us for support: + 358 12 345 6789.";
        exit; 
        }
    }
    // Validate the availability of table in the timeslots
    $table_id = mysqli_real_escape_string($conn, $table_id);
    $start_datetime = mysqli_real_escape_string($conn, $start_datetime);
    $end_datetime = mysqli_real_escape_string($conn, $end_datetime);
    // Format datetime values as 'YYYY-MM-DD HH:MM:SS'
    $start_datetime = date('Y-m-d H:i:s', strtotime($start_datetime));
    $end_datetime = date('Y-m-d H:i:s', strtotime($end_datetime));
    $sql_avail = "SELECT COUNT(*) AS count FROM quang_reservation 
        WHERE table_id='$table_id' 
        AND ((start_datetime <= '$start_datetime' AND end_datetime >= '$start_datetime') 
        OR (start_datetime <= '$end_datetime' AND end_datetime >= '$end_datetime') 
        OR (start_datetime >= '$start_datetime' AND end_datetime <= '$end_datetime'))";
    $result = mysqli_query($conn, $sql_avail);
    if ($result === false) {
        // Query failed, display error message
        echo "Error: " . mysqli_error($conn);
    } 
    else {
        // Query succeeded, fetch the result
        $row = mysqli_fetch_assoc($result);
        if ($row['count'] > 0) {    
            // Room is already booked, show error message to customer
            echo "<h6><i>Sorry, the table is already booked in the desired time. Please choose a different date, time or table, or call us for support: + 358 12 345 6789.<br></i></h6>";
            exit;
        } 
    }
    // END OF VALIDATIONS
    // When all validations pass, display the reservation result
    $sql = "INSERT into quang_reservation(reservation_code, cust_name, phone_nbr, cust_email, start_datetime, end_datetime, nbr_of_guests, special_request, table_id, membership_id)
    VALUES('$reservation_code', '$cust_name', '$phone_nbr', '$cust_email', '$start_datetime', '$end_datetime', '$nbr_of_guests', '$special_request', '$table_id', '$membership_id')";
    // validate connection
    if ($conn ->query($sql) === true) {
         echo "<h6><i>Congratulations!</i></h6>";
        // Retrieve variables to display in the message
        $table_name = "";
        $sql_table = "SELECT table_name FROM quang_tables WHERE table_id='$table_id'";
        $result_table = $conn->query($sql_table);
            if ($result_table->num_rows > 0) {
                    $row_table = $result_table->fetch_assoc();
                    $table_name = $row_table["table_name"];
                    $reserved_date = date('l d/m/Y', strtotime($party_date));
                    echo "<h6>You have successfully reserved $table_name for $nbr_of_guests people <br>
                    From $start_time to $end_time on $reserved_date <br>
                    Your reservation code is $reservation_code <br>
                    Looking forward to welcoming and serving you! Nähdään!</h6>";
            }
            else {
                echo "Error: ".$conn->error;
            }
    }
}

?>