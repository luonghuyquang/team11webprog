<?php
session_start();
include "db.php";
// to put data into database 
if(isset($_POST['prcd_order'])){
  $username = $_POST['username'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $types = $_POST['type'];
  $gttl = $_GET['tprice'];
  $order_time = date("Y-m-d h:i:s");

  // to put data into rushani_order  
  $sqlproceed = "INSERT INTO rushani_order (order_time,username,address,phone_nbr,order_type,total_amt) VALUES ('$order_time','$username','$address','$phone','$types','$gttl')";
  if($conn->query($sqlproceed)){
    $last_id = $conn->insert_id;
    foreach($_SESSION["shopping_cart"] as $product){
       $itmcode = $product["code"];
       $itmname = $product["name"];
       $qty = $product["quantity"];
       $price = $product["price"];
       $subamt = $qty*$price;

        $_SESSION['username'] = $username;
        $_SESSION['address'] = $address;
        $_SESSION['phone'] = $phone;
        $_SESSION['types'] = $types;
        $_SESSION['gttl'] = $gttl;
        $_SESSION['order_time'] = $order_time;


      // to put data into rushani_order_items
       $sqlproceed2 = "INSERT INTO rushani_order_items (item_nbr,item_name,quantity,unit_price,subtotal_amt,order_nbr) VALUES ('$itmcode','$itmname','$qty','$price','$subamt','$last_id')";
         if($conn->query($sqlproceed2)){           
           header("location:print.php");
         }
    }
  }

  


}
?>

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
}
?>



<?php
    $title = "Proceed page";
    include "header.php";
 ?>   
  <!--End of Header part-->

    <div class="container">

     <div class="message_box" style="margin:10px 0px;">
          
          </div> 

      
      <div class="row">
        <div class="col-md-12">
          <div class="cart">
           <form class="row g-3" action="" method="post">
                    <?php
                    // set session data here..
                     $username = "";
                     $customer_id = "";
                     $address = "";
                     $phone = "";
                     $email = ""  
                    ?>
                  <div class="col-md-6">
                    <label for="inputEmail" class="form-label"  >Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="username" value="" required>
                    <div class="invalid-feedback">
                        Please Enter Email Address.
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputLastName" name="address" value="" required>
                    <div class="invalid-feedback">
                        Please Enter Your Address.
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="inputPhoneNo" class="form-label">phone No</label>
                    <input type="text" class="form-control" id="inputPhoneNo" name="phone" value="" required>
                    <div class="invalid-feedback">
                        Please Enter Phone Number.
                    </div>
                  </div>

                  <!--
                  <div class="col-md-6">
                    <label for="inputPhone" class="form-label">Email</label>
                    <input type="text" class="form-control" id="inputPhone" name="email" value="">
                  </div>
                  -->

                  <div class="col-md-6">
                    <label for="inputPhone" class="form-label">Type</label>
                    <select class="form-control" name="type">
                      <option value="Pickup">Pickup</option>
                      <option value="Delivery">Delivery</option>
                    </select>
                  </div>
                                    
                  <div class="row" style="padding-top: 20px;">
                    <div class="col-md-12">
                      <button type="submit" class="btn11" name="prcd_order"> Proceed order </button>
                      <br><br>
                    </div>
                  </div>
                </form>
          </div>



        </div>
      </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function ()
        {
          $('#example').DataTable();
        });

    </script> 

<?php
$conn->close();

?>

    <!--Footer-->
<?php include "footer.php" ?>

  </div>
   
