<?php
$title = "AboutUs page";
include "header.php" ?>


 <div class="text-center content-helper" style="width: 98%">
    <div class="container">
 <div class="row">
    <div class="col-lg-6 mx-auto text-center" style="padding:80px">
      <h1>Get to know us better</h1>
      <p2> Amarillo brings friends and strangers together and makes the gang feel comfortable around the same table. In
        terms of style, Amarillo is fresh and fair, uncomplicated and energetic. The menu offers plenty of fresh
        flavors without forgetting the best favourites. And of course, there is also a throat moistener and a nice
        feeling. If you want a unique experience, you should reserve a seat at The Table. The whole evening's
        experience offers treats, entertainment and lots of happy surprises!Come to test, have fun and find new friends!</p2>
    </div>
    <div class="col-lg-6 mx-auto">
    <br>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="../images/about.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/about1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/about2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/about3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/about3.png" class="d-block w-100" alt="...">
    </div>
</div>
  </div>
 </div>
</div>
    <div class="text-center content-helper" style="width: 98%">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 mx-auto text-center" >
    <h2>Become our customer</h2>
    <p2>Thank you for visiting our website. Here, we hope to serve as a resource for you and offer you the best possible experience.
       We want to ensure that every customer feels welcome and comfortable while visiting our site, so please let us know if 
       there is anything we can do to make your visit more enjoyable. Thank you!</p2>
  </div>
  <div class="col-lg-6 mx-auto text-left" >
    <form method="POST" action=" " id="loginform" >
  <input type="text" placeholder="username" id="username" name="username"  class="form-control" ><br>
  <input type="password" id="pass" placeholder="Password" name="password" minlength="8" class="form-control" ><br>
  <input class="btn btn-primary" type="submit" value="Login" name="login"  onclick="val(document.loginform)">
  <a class="btn btn-primary" href="user.php" role="button">Sign up</a>
 </form>
  </div>
 </div>
</div>
</div>
</div>
<?php
if(isset($_POST['login']))
{    
    $password=$_POST['password'];
    $username=$_POST['username'];
    include 'db.php';
    //this is slect the row where username and password are the same as the one the user entered
    $sql="SELECT * FROM aisha_customer where username='$username' and password='$password'";
    $result = $conn->query($sql);

    /*if ($result->num_rows > 0) {
      echo"logged in successfully";
    }
    else{
      echo"invalid password or username";
      
    }*/
    $conn->close();  
}
  
?>
 
<?php include "footer.php" ?>

