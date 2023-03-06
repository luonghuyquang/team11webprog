<?php
$title = "Reservation page";
include "header.php" ?>

<div class="container-fluid">
  <div class="row">
    <!--Left side of the reservation page: info, buttons, photo etc.-->
    <div class="col-md-6">
      <br><br><br>
      <a class="btn btn-primary" href="tel:+358123456789"><i class="fa fa-phone"
        style="font-size:20px;color:rgb(228, 255, 23)"></i> Call us + 358 12 345 6789</a>
      <a class="btn btn-secondary" href="sms:+358123456789?body=I-Want-To-Reserve!"><i class="fa fa-send-o"
        style="font-size:20px"></i> Send us an SMS</a> <br><br>
      <a class="btn btn-success" href="https://wa.me/358123456789" target="_blank"><i class="fa fa-whatsapp"
        style="font-size:24px"></i> Chat on WhatsApp</a>
      <a class="btn btn-dark" href="mailto:amarillo@gmail.com" role="button"><i
        class="fa fa-envelope" style="font-size:20px;color:white"></i> Reserve via email amarillo@gmail.com</a><br><br>
      <a class="btn btn-success" href="https://goo.gl/maps/8RrzVnpfkNV4gU9NA" target="_blank"><i class="fa fa-map-marker"
        style="font-size:24px"></i> Aleksanterinkatu 46, 00100 Helsinki <i class="fa fa-bus"
        style="font-size:18px;"></i> <i class="fa fa-cab" style="font-size:18px;"></i> <i class="fa fa-car"
        style="font-size:18px;"></i></a> <br><br>
      <img class="d-block w-100" src="../images/party.jpg" alt="Party Reservation"
      style="object-fit: contain; width: 100%; height: auto;"><br><br>
      <img class="d-block w-100" src="../images/floorlayout.png" alt="Party Reservation"
      style="object-fit: contain; width: 100%; height: auto;"><br><br>
    </div>
    <div class="col-md-6">
    <!--Right side of the reservation page: form-->
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-12">
            <br>
            <h1>Reservation</h1>
            <p>You can call, text, email, or chat with us. You can also use the form below to reserve. Let us know your preference to prepare the best for your event
            </p>
            <form class="row g-3" name="reservation form" method="POST" action = "">
            <div class="col-md-6">
              <label for="inputFirstName" class="form-label">Your Name</label>
              <input class="form-control" type="text" id="inputFirstName" name="cust_name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
              <label for="inputPhoneNumber" class="form-label">Your Phone Number</label>
              <input class="form-control" type="tel" id="inputPhoneNumber" name="phone_nbr" placeholder="Your Phone Number" required>
            </div>
            <div class="col-md-6">
              <label for="inputEmail" class="form-label">Your Email Address</label>
              <input class="form-control" type="email" id="inputEmail" name="cust_email" placeholder="Your Email Address" required>
            </div>
            <div class="col-md-6">
              <label for="inputDate" class="form-label">Desired Date</label>
              <input class="form-control" type="date" id="inputDate" name="party_date" placeholder="Party date" required>
            </div>
            <div class="col-md-6">
              <label for="inputStartTime" class="form-label">From</label>
              <input class="form-control" type="time" id="inputStartTime" name="start_time" placeholder="From" required>
            </div>
            <div class="col-md-6">
              <label for="inputEndTime" class="form-label">To</label>
              <input class="form-control" type="time" id="inputEndTime" name="end_time" placeholder="To" required>
            </div>
            <div class="col-md-6">
              <label for="inputNbrOfGuests" class="form-label">Number of People</label>
              <input class="form-control" type="number" id="inputNbrOfGuests" name="nbr_of_guests" placeholder="Number of People" required>
            </div>
            <div class="col-md-6">
              <label for="inputSpecRequest" class="form-label">Your Special Request</label>
              <input class="form-control" type="text" id="inputSpecRequest" name="special_request" placeholder="(Theme, Nice Surprise, Diet, etc.)" required>
            </div>
            <div class="col-md-6">
              <label for="selectTable" class="form-label">Please select a Table</label>
              <select class="form-control" id="selectTable" name="table_id"><br><br>
                <option value="meeting_room_1">Meeting Room, good for up to 10 people</option>
                <option value="table_1">Table 1, good for 1 - 2 people </option>
                <option value="table_2">Table 2, good for 1 - 2 people </option>
                <option value="table_3">Table 3, good for 1 - 2 people </option>
                <option value="table_4">Table 4, good for 3 - 4 people </option>
                <option value="table_5">Table 5, good for 3 - 4 people</option>
                <option value="table_6">Table 6, good for 5 - 6 people</option>
              </select>
            </div>
            <div class="col-md-6">
              <h5>PLACE HOLDER FOR CAPTCHA</h5>
            </div>
            <div class="col-md-6">
            <label for="submitButton" class="form-label">Submit your Reservation</label>
            <button type="submit" class="btn btn-primary btn-block" id="submitButton" name="submit">Click To Reserve</button>
            </div>
          </form>
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row align-items-center">
    <!-- Displaying message after User submission-->
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
        // Insert input to database
        include 'restodb.php';
        $sql = "INSERT into quang_reservation(reservation_code, cust_name, phone_nbr, cust_email, start_datetime, end_datetime, nbr_of_guests, special_request, table_id)
          VALUES('$reservation_code', '$cust_name', '$phone_nbr', '$cust_email', '$start_datetime', '$end_datetime', '$nbr_of_guests', '$special_request', '$table_id')";
        // Retrieve variables to display in the message
        $table_name = "";
        $sql_table = "SELECT * FROM quang_tables WHERE table_id='$table_id'";
        $result_table = $conn->query($sql_table);
        if ($result_table->num_rows > 0) {
          $row_table = $result_table->fetch_assoc();
          $table_name = $row_table["table_name"];
          echo "<h4>You have successfully reserved $table_name for $nbr_of_guests people <br>
          From $start_time to $end_time of $party_date <br>
          Your reservation code is $reservation_code <br>
          Looking forward to welcoming and serving you! Nahdaan!</h4>";
        }
        else {
        echo "Error: ".$conn->error;
        }
      }
    ?>
  </div>  
</div>

<?php
include 'reservez.php';
?>

<?php include "footer.php" ?>