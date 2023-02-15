<?php
$title = "Reservation page";
include "header.php" ?>

<div class="container">

<div class="row">
  <!--Left side of the reservation page: info, buttons, and map-->
  <!--Info and Buttons-->
  <div class="col-md-6">
    <br>
    <a class="btn btn-primary" href="tel:+358123456789"><i class="fa fa-phone"
        style="font-size:20px;color:rgb(228, 255, 23)"></i> Call us + 358 12 345 6789</a>
    <a class="btn btn-secondary" href="sms:+358123456789?body=I-Want-To-Reserve!"><i class="fa fa-send-o"
        style="font-size:20px"></i> Send us an SMS</a> <br><br>
    <a class="btn btn-success" href="https://wa.me/+358-12-345-6789"><i class="fa fa-whatsapp"
        style="font-size:24px"></i> Chat on WhatsApp</a>
    <a class="btn btn-dark" href="mailto:amarillo@gmail.com" role="button"><i
        class="fa fa-envelope" style="font-size:20px;color:white"></i> Reserve via email amarillo@gmail.com</a><br><br>
    <a class="btn btn-success" href="https://goo.gl/maps/8RrzVnpfkNV4gU9NA"><i class="fa fa-map-marker"
        style="font-size:24px"></i> Aleksanterinkatu 46, 00100 Helsinki <i class="fa fa-bus"
        style="font-size:18px;"></i> <i class="fa fa-cab" style="font-size:18px;"></i> <i class="fa fa-car"
        style="font-size:18px;"></i></a> <br><br>
    <img class="d-block w-100" src="../images/party.jpg" alt="Party Reservation"
      style="object-fit: contain; width: 100%; height: auto;"><br><br>
  </div>
  <div class="col-md-6">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <br>
          <h1>Reservation</h1>
          <p>You can call, text, email, or chat with us. You can also use the form below to reserve. Let us know your preference to prepare the best for your event
          </p>
          <form class="row g-3">
            <div class="col-md-6">
              <label for="inputFirstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="inputFirstName">
            </div>
            <div class="col-md-6">
              <label for="inputLastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="inputLastName">
            </div>
            <div class="col-md-6">
              <label for="inputEmail" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="inputEmail">
            </div>
            <div class="col-md-6">
              <label for="inputPhone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="inputPhone">
            </div>
            <div class="col-md-6">
              <label for="inputDate" class="form-label">Date:</label>
              <br>
              <input type="date" class="form-control" id="inputDate" required>
            </div>
            <div class="col-md-6">
              <label for="inputTime" class="form-label">Time</label>
              <input type="time" class="form-control" id="inputTime">
            </div>
            <div class="col-md-6">
              <label for="inputNumber" class="form-label">Number of people </label>
              <input type="number" class="form-control" id="inputNumber">
            </div>
            <div class="col-md-6">
              <label for="inputRequest" class="form-label">Special Request</label>
              <input type="text" class="form-control" id="inputRequest">
            </div>
            <div class="row" style="padding-top: 20px;">
              <div class="col-md-12">
                <button type="button" class="btn11"> Submit </button>
                <br><br>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<?php include "footer.php" ?>