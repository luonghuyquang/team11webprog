<?php
$title = "Order page";
include "header.php"; 
include "db.php";

if(isset($_POST['prcd_order']))
 {
    $customerid = $_POST['customerid'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $types = $_POST['type'];
    $gttl = $_GET['tprice'];
    $order_time = date("Y-m-d h:i:s");
    
    $sqlproceed = "INSERT INTO rushani_order (order_time,username,customer_id,address,phone_nbr,email,order_type,total_amt) VALUES ('$order_time','$username','$customerid','$address','$phone','$email','$types','$gttl')";
    
    if($conn->query($sqlproceed))
    {
      $last_id = $conn->insert_id;
      foreach($_SESSION["shopping_cart"] as $product)
      {
         $itmcode = $product["code"];
         $itmname = $product["name"];
         $qty = $product["quantity"];
         $price = $product["price"];
         $subamt = $qty*$price;
  
  
         $sqlproceed2 = "INSERT INTO rushani_order_items (item_nbr,item_name,quantity,unit_price,subtotal_amt,order_nbr) VALUES ('$itmcode','$itmname','$qty','$price','$subamt','$last_id')";
          
         if($conn->query($sqlproceed2))
         {
             unset($_SESSION["shopping_cart"]);
             header("location:menu.php");
         }
      }
    }
    
  }

?>

<?php
    if(!empty($_SESSION["shopping_cart"])) 
    {
        $cart_count = count(array_keys($_SESSION["shopping_cart"]));
    }
?>


<?php include "footer.php" ?>