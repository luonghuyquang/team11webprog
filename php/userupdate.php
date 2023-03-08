<?php
$title="updating and deleting data from the database";
include "header.php";
include "db.php";
$var=$_GET['email'];
$results=mysqli_query($conn,"SELECT * from aisha_customer where email_address='$var'");
$row= mysqli_fetch_array($results);
echo"<p style='font-size:18px;'>You can now update or delete your information in our database.</p>"
?>
<div class="col-lg-6 mx-auto text-left" style="padding:20px">
  <form method="POST">
  <input type="text" placeholder="first name" name="fname"  class="form-control" required value="<?php echo $row['fname']; ?>"><br>
  <input type="text" placeholder="last name" name="lname"  class="form-control" required value="<?php echo $row['lname']; ?>"><br>
  <input type="text" placeholder="your address" name="address"  class="form-control" required value="<?php echo $row['address']; ?>"><br>
  <input type="password" id="pass" placeholder="Password" name="password" minlength="8" class="form-control" required value="<?php echo $row['password']; ?>"><br>
  <input type="email" id="email" name="email_address" placeholder="email address" class="form-control" required value="<?php echo $row['email_address']; ?>"><br>
  <input type="tel" placeholder="phone number" name="phone_nbr"  class="form-control" optional value="<?php echo $row['phone_nbr']; ?>"><br>
  
  <input type="checkbox">
  <label for="daily emails" >i want to receive the daily emails</label><br>
  <input type="checkbox" name="member" value="1">
  <label for="membership"> I want to receive a customer membership</label><br>
  <input class="btn btn-primary" type="submit" value="update" name="update">
  <input class="btn btn-primary" type="submit" value="delete" name="delete">
</form>
</div>
<?php
if(isset($_POST['update'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];  
    $password=$_POST['password'];
    $email_address=$_POST['email_address'];
    $phone_nbr=$_POST['phone_nbr'];
    $address=$_POST['address'];
    include "db.php";
    $sql=mysqli_query($conn,"UPDATE aisha_customer SET fname='$fname',lname='$lname',address='$address',password='$password',email_address='$email_address',phone_nbr='$phone_nbr' WHERE email_address='$var'");
    if($sql){
        echo"Your informations is updated successfully";
        }
        else{
            echo"Your informations is not updated";
        }
}
     ?>
<?php
    if(isset($_POST['delete'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];  
        $password=$_POST['password'];
        $email_address=$_POST['email_address'];
        $phone_nbr=$_POST['phone_nbr'];
        $address=$_POST['address'];
        include "db.php";
    $sql=mysqli_query($conn,"DELETE from aisha_customer WHERE email_address='$var' ");
    if($sql){
    echo"Your informations is deleted successfully";
    }
    else{
        echo"Your informations is not deleted";
    }
     }
 ?> 
<?php include "footer.php" ?>