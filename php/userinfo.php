<?php
$title="Customer information";
include "header.php";
?>
<div class="row">
<div class="col-lg-6 mx-auto text-center" >
 <p style="font-size:16px; font-style:roboto;">You can you display your information by searching for your email in our database using the 
  the search button on the right. To update or delete your information from our database 
  click on the email in the table of results. We hope you will have a wonderful customer experience with us.
 </p> 
 </div>
  <div class="col-lg-6 mx-auto text-left" >
  <form method="POST" action="" >
  <input type="email" id="email" name="email_address" placeholder="email address" class="form-control" ><br>
  <input class="btn btn-primary" type="submit" value="Search" name="search">
  </div>
</div> 
</form>
<?php
if(isset($_POST['search'])){
$email=$_POST['email_address'];
include "db.php";
$sql="SELECT * FROM aisha_customer WHERE email_address='$email'";
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
       <td><a href='userupdate.php?email=$row[email_address]'>$row[email_address]</a></td>
       <td>$row[fname]</td>
       <td>$row[lname];</td>
       <td>$row[phone_nbr]</td>
       <td>$row[address]</td>
       <td>$row[password]</td>
       <td>$row[membershipid]</td>
       </tr>
        ";
        echo" </table>";
    }
}
  else{
    echo"Sorry! Your email is not registered please consider signing up!";
  }
$conn->close();
}
 ?>
<?php include "footer.php" ?>