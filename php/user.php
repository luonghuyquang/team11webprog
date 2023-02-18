<?php
$title = "AboutUs page";
include "header.php" ?>
  <div class="text-center content-helper" style="width: 98%">
    <div class="container">
 <div class="row">
  <div class="col-lg-6 mx-auto text-left" style="padding:25px">
  <h1>Customer membership</h1>
  <p2>While most businesses offer discounts to their customers through
    loyalty programs or other means, there are a few that go a step further and offer discounts exclusively through customer membership. By signing up for a customer membership, you're automatically connected with the company's email list and can receive special offers and discounts as soon as they're released. Plus, you can feel confident knowing that you're supporting the business by being a member. With so many benefits to customer membership, it's worth taking the time to get signed up. Check out our guide on how to 
    get started to see if customer membership is right for your business.    </p2>
  </div>
  <div class="col-lg-6 mx-auto text-left" style="padding:20px">
  <form method="POST">
  <input type="text" placeholder="first name" name="fname"  class="form-control" required><br>
  <input type="text" placeholder="last name" name="lname"  class="form-control" required><br>
  <input type="text" placeholder="choose a username" name="username"  class="form-control" required><br>
  <input type="password" id="pass" placeholder="Password" name="password" minlength="8" class="form-control" required><br>
  <input type="email" id="email" name="email_address" placeholder="email address" class="form-control" required><br>
  <input type="tel" placeholder="phone number" name="phone_ndr"  class="form-control" optional><br>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1">i want to receive the daily emails</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> I want to receive a customer membership</label><br>
  <input class="btn btn-primary" type="submit" value="Submit">
  </form>
  </div>
  </div>
  </div>
<?php include "footer.php" ?>