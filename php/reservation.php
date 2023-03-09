<?php
$title = "Reservation Amarillo";
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
        <img class="d-block w-100" src="../images/floorlayout.png" alt="Image of Floor Layout idicating the locations of tables and a meeting room"
        style="object-fit: contain; width: 100%; height: auto;"><br><br>
        <img class="d-block w-100" src="../images/party.jpg" alt="Image of Party at Amarillo Restaurant, people having fun with delicious food on the table"
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
            <h5>
            <br>Opening time: 10:00 - 22:00 Mon - Sun
            <br>Reservation at least 24 hours before and within 4 weeks to the event
            <br>Duration of a reservation: min 30 min - max 3 hours
            <br>Please note your reservation code
            </h5>
            <form class="row g-3" name="reservation form" method="POST" action = "">
            <div class="col-md-6">
              <label for="inputFirstName" class="form-label">Your Name</label>
              <input class="form-control" type="text" id="inputFirstName" name="cust_name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
              <label for="inputPhoneNumber" class="form-label">Your Phone Number</label>
              <input class="form-control" type="tel" value="" onblur="formatPhoneNumber(this)" id="inputPhoneNumber" name="phone_nbr" placeholder="+358-__-___-____" required>
            </div>
            <div class="col-md-6">
              <label for="inputEmail" class="form-label">Your Email Address</label>
              <input class="form-control" type="email" id="inputEmail" name="cust_email" placeholder="Your Email Address" required>
            </div>
            <div class="col-md-6">
              <label for="inputDate" class="form-label">Desired Date (24 hours - 4 weeks)</label>
              <input class="form-control" type="date" id="inputDate" name="party_date" placeholder="Party date" required>
            </div>
            <div class="col-md-6">
              <label for="inputStartTime" class="form-label">From</label>
              <input class="form-control" type="time" id="inputStartTime" name="start_time" placeholder="From" min="10:00" max="21:30" required>
            </div>
            <div class="col-md-6">
              <label for="inputEndTime" class="form-label">To (duration 30 min - 3hrs)</label>
              <input class="form-control" type="time" id="inputEndTime" name="end_time" placeholder="To" min="10:30" max="22:00" required>
            </div>
            <div class="col-md-6">
              <label for="inputNbrOfGuests" class="form-label">Number of People</label>
              <input class="form-control" type="number" min="1" max="10" id="inputNbrOfGuests" name="nbr_of_guests" placeholder="Number of People" required>
            </div>
            <div class="col-md-6">
              <label for="inputSpecRequest" class="form-label">Your Special Request (if any)</label>
              <input class="form-control" type="text" id="inputSpecRequest" name="special_request" placeholder="(Theme, Nice Surprise, Diet, etc.)">
            </div>
            <div class="col-md-6">
              <label for="selectTable" class="form-label">Please dropdown to select an appropriate Table</label>
              <select class="form-control" id="selectTable" name="table_id"><br><br>
                <option value="meeting_room">Meeting Room, good for up to 10 people</option>
                <option value="table_1">Table 1, good for 1 - 2 people </option>
                <option value="table_2">Table 2, good for 1 - 2 people </option>
                <option value="table_3">Table 3, good for 1 - 2 people </option>
                <option value="table_4">Table 4, good for 3 - 4 people </option>
                <option value="table_5">Table 5, good for 3 - 4 people</option>
                <option value="table_6">Table 6, good for 5 - 6 people</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputMembershipID" class="form-label">Membership ID, if you have one</label>
              <input class="form-control" type="text" id="inputMembershipID" name="membership_id" placeholder="Membership ID">
            </div>
            <div class="col-md-6">
            <label for="submitButton" class="form-label">Submit your Reservation</label>
            <button type="submit" class="btn btn-primary btn-block" id="submitButton" name="submit">Click To Reserve</button>
            </div>
          </form>
            <br>

            <?php
            include 'reserve_validation.php';
            ?>

            <br>
          <img class="d-block w-100" src="../images/resto.decor.jpg" alt="Image showing Amarillo interior decor with table, chairs, and pictures on the wall"
          style="object-fit: contain; width: 100%; height: auto;"><br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php" ?>