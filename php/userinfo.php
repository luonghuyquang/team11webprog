<?php
$title="Reading data from the database";
include "header.php";
?>
<div class="row">
  <div class="col-lg-6 mx-auto text-center" >
  <form method="POST" action="" >
  <input type="email" id="email" name="email_address" placeholder="email address" class="form-control" ><br>
</div>
  <div class="col-lg-6 mx-auto text-left" >
  <input class="btn btn-primary" type="submit" value="Search" name="search">
  </div>
</div> 
</form>
<?php
if(!$_SERVER($_POST['search'])){
  $email=$_POST['email_address'];
include "db.php";
$sql="SELECT * from aisha_customer WHERE $email='email_address'";
$results=$conn->query($sql);
if($results->num_rows>0){
    
    echo"
    <table class='table'>
    <tr>
    <th>Email</th><th>First name</th><th>Last name</th><th>Phone number</th><th>Address</th><th>Password</th><th>Membershipid</th>
    </tr>
    ";
    while($row=$results->fetch_assoc()){
        echo"   
       <tr>
       <td>$row[email_address]</td>
       <td>$row[fname]</td>
       <td>$row[lname];</td>
       <td>$row[phone_nbr]</td>
       <td>$row[address]</td>
       <td>$row[password]</td>
       <td>$row[membershipid]</td>
       </tr>
        ";
    }
}
  else{
    echo"Sorry! Your email is not registered please consider signing up!";
  }
$conn->close();
}
 ?>
