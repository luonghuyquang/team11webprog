<?php
$title = "Order page";
include "header.php"; 
include "db.php";

// save items..
if(isset($_POST['saveitm'])){
    $itmname = $_POST['itmname'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $img = $_FILES["itemimg"]["name"];
  
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["itemimg"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["itemimg"]["tmp_name"], $target_file)) {
      $sql = "INSERT INTO rushani_items (item_name,unit,unit_price,quantity,item_image) VALUES ('$itmname','$unit','$price','$qty','$img')";
  
            if ($conn->query($sql) === TRUE) {
              echo "<script type='text/javascript'>alert('New ITEM added successfully')</script>";
            } else {
              echo "<script type='text/javascript'>alert('error creating items')</script>";
            }
    }
  }
  


?>






<?php include "footer.php" ?>