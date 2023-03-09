<?php
$title = "Review page";
include "header.php";

// creating data
echo
  '
  <div class ="container">
  <div class="row d-flex justify-content-center">
<div class="col-md-10 col-xl-8 text-center">
  <h3 class="mb-4">Amarillo Reviews</h3>
  <button class="btn btn-primary custom col-6 d-grid gap-2 mx-auto toggle-review-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Write your review
  </button>
</p>
<div class="collapse" id="collapseExample">
<div class="">
<form class="row g-3 form-review" method="post" action="" name="reviewForm" onsubmit="return rateValidation();">
<div class="form-helper">
<div class="d-flex justify-content-between align-items-center">
  <div class="ratings-selector"> 
    <i class="fa fa-star fa-3x rate" data-rate="1"></i>
    <i class="fa fa-star fa-3x rate" data-rate="2"></i>
    <i class="fa fa-star fa-3x rate" data-rate="3"></i>
    <i class="fa fa-star fa-3x rate" data-rate="4"></i>
    <i class="fa fa-star fa-3x rate" data-rate="5"></i>
  </div>
</div>
</div>
<input type="hidden" class="form-control" name="rate" required>
<div class="col-md-4">
  <input type="text" class="form-control" placeholder="First Name" name="fname" required onblur="fnameVal()">
</div>
<div class="col-md-4">
  <input type="text" class="form-control" placeholder="Last Name" name="lname" required onblur="lnameVal()">
</div>
<div class="col-md-4">
  <input type="text" class="form-control" placeholder="E-mail" name="email_address" required>
</div>
<div class="col-12">
    <textarea class="form-control" placeholder="Describe your experience.." name="review" rows="3" maxlength="250"></textarea>
</div>
<div class="col-6 d-grid gap-2 mx-auto mb-3">
  <button class="btn btn-primary custom" type="submit" name="submit">Submit your review</button>
</div>
</form>
</div>
</div>
</div>
';

if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email_address'];
  $review = $_POST['review'];
  $datetime = date("Y-m-d H:i:s");
  $rate = $_POST['rate'];

  include 'db.php';
  $sql = "insert into shreya_review(fname,lname,email_address,review,date,rate) values('$fname', '$lname','$email','$review', '$datetime' ,'$rate')";

  if ($conn->query($sql) === TRUE) 
  {
    echo "<div class='feedback-text'>Thank you for your feedback!</div>";
  } 
  else
  {
    echo "<div class='feedback-text'>Error: " . $conn->error . "</div>";
  }
}


echo '
 <p class="mb-4 pb-2 mb-md-5 pb-md-0">
</p>
</div>
</div>
';

//Reading data

include 'db.php';
$sql = "select * from shreya_review ORDER BY reviewid DESC; ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
echo ' <section>
  <div class ="container">
  <div class="row text-center d-flex align-items-stretch" >';

  while ($row = $result->fetch_assoc()) {
    echo "
    <div class='col-md-4 mb-5 mb-md-0 d-flex align-items-stretch' style = 'padding-bottom:20px';>
    <div class='card testimonial-card' style='width: 470px;'>
    <div class='avatar mx-auto'>
    <span id='firstName' class='d-none'>$row[fname]</span>
    <span id='lastName' class='d-none'>$row[lname]</span>
    <div id='profileImage'></div>
    </div>
    <div class='card-body'>
      <span style ='font-size: 12px;'>$row[date]</span>
      <h4 style='font-weight: 750;'>$row[fname] $row[lname]</h4>
      ";

    switch ($row['rate']) {
      case '1':
        ratingOne();
        break;
      case '2':
        ratingTwo();
        break;
      case '3':
        ratingThree();
        break;
      case '4':
        ratingFour();
        break;
      case '5':
        ratingFive();
        break;
    }
    echo "
      <hr />
      <p class='dark-grey-text mt-4' style ='font-size: 25px;'>
        <i class='fas fa-quote-left pe-2'></i>$row[review]
      </p>
    </div>
  </div>
</div>";

  }
  echo '
  </div>
</div>
 </section> ';
} else {
  echo "No Result";
}

$conn->close();

function ratingOne()
{
  echo ' 
  <div class="form-helper">
  <div class="d-flex justify-content-between align-items-center">
    <div class="ratings">
      <i class="fa fa-star fa-3x rating-color"></i>
      <i class="fa fa-star fa-3x"></i>
      <i class="fa fa-star fa-3x"></i>
      <i class="fa fa-star fa-3x"></i>
      <i class="fa fa-star fa-3x"></i>
    </div>
  </div>
  </div>';
}
function ratingTwo()
{
  echo ' <div class="form-helper">
  <div class="d-flex justify-content-between align-items-center">
    <div class="ratings">
      <i class="fa fa-star fa-3x rating-color"></i>
      <i class="fa fa-star fa-3x rating-color"></i>
      <i class="fa fa-star fa-3x"></i>
      <i class="fa fa-star fa-3x"></i>
      <i class="fa fa-star fa-3x"></i>
    </div>
  </div>
  </div>';
}

function ratingThree()
{
  echo " <div class='form-helper'>
  <div class='d-flex justify-content-between align-items-center'>
    <div class='ratings'>
      <i class='fa fa-star fa-3x rating-color'></i>
      <i class='fa fa-star fa-3x rating-color'></i>
      <i class='fa fa-star fa-3x rating-color'></i>
      <i class='fa fa-star fa-3x'></i>
      <i class='fa fa-star fa-3x'></i>
    </div>
    </div>
  </div>";
}

function ratingFour()
{
  echo " <div class='form-helper'>
  <div class='d-flex justify-content-between align-items-center'>
    <div class='ratings'>
      <i class='fa fa-star fa-3x rating-color'></i>
      <i class='fa fa-star fa-3x rating-color'></i>
      <i class='fa fa-star fa-3x rating-color'></i>
      <i class='fa fa-star fa-3x rating-color'></i>
      <i class='fa fa-star fa-3x'></i>
    </div>
  </div>
  </div>";
}

function ratingFive()
{
  echo " <div class='form-helper'>
  <div class='d-flex justify-content-between align-items-center'>
    <div class='ratings'>
      <i class='fa fa-star fa-3x rating-color'></i>
      <i class='fa fa-star fa-3x rating-color'></i>
      <i class='fa fa-star fa-3x rating-color'></i>
      <i class='fa fa-star fa-3x rating-color'></i>
      <i class='fa fa-star fa-3x rating-color'></i>
    </div>
  </div>
  </div>";
}

include "footer.php" ?>