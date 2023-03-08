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
  <input type="text" placeholder="your address" name="address"  class="form-control" required><br>
  <input type="password" id="pass" placeholder="Password" name="password" minlength="8" class="form-control" required><br>
  <input type="email" id="email" name="email_address" placeholder="email address" class="form-control" required><br>
  <input type="tel" placeholder="phone number" name="phone_nbr"  class="form-control" optional><br>
  
  <input type="checkbox">
  <label for="daily emails">i want to receive the daily emails</label><br>
  <input type="checkbox" name="member" value="1">
  <label for="membership"> I want to receive a customer membership</label><br>
  <input class="btn btn-primary" type="submit" value="Register" name="signin">
  </form>
  </div>
  </div>
  </div>
  <?php
 if(isset($_POST['signin'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];  
    $password=$_POST['password'];
    $email_address=$_POST['email_address'];
    $phone_nbr=$_POST['phone_nbr'];
    $address=$_POST['address'];
    include"db.php";
    $sql="INSERT into aisha_customer(fname,lname,address,password,email_address,phone_nbr)
    VALUES ('$fname','$lname','$address','$password','$email_address','$phone_nbr')";
   if($conn->query($sql)== TRUE){
       echo"information is added successfully!";
   }
   else{
       echo "Error".$conn->error;
   }
    if(empty($_POST['member'])){
      echo"No membership id will be alocated";
    }else{
     
     echo"membership id allocated";
    }
  }
?>
<?php include "footer.php" ?>