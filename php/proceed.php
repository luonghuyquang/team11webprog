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

<div class="container">

     <div class="message_box" style="margin:10px 0px;">
          
    </div> 

      
      <div class="row">
        <div class="col-md-12">
          <div class="cart">
           <form class="row g-3" action="" method="post">

             <?php
             // set session data here..
                $username = "test";
                $customer_id = "123";
                $address = "abc123";
                $phone = "0773565342";
                $email = "metanataemailsetkarapan@gmail.com"  
            ?>
                <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">Username</label>
                    <input type="hidden" name="customerid" value="<?php echo $customer_id;?>">
                    <input type="text" class="form-control" id="inputFirstName" name="username" readonly="readonly" value="<?php echo $username;?>">
                </div>

                <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputLastName" name="address" value="<?php echo $address;?>">
                </div>

                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">phone No</label>
                    <input type="text" class="form-control" id="inputEmail" name="phone" value="<?php echo $phone;?>">
                </div>

                <div class="col-md-6">
                    <label for="inputPhone" class="form-label">Email</label>
                    <input type="text" class="form-control" id="inputPhone" name="email" readonly="readonly" value="<?php echo $email;?>">
                </div>

                <div class="col-md-6">
                    <label for="inputPhone" class="form-label">Type</label>
                    <select class="form-control" name="type">
                      <option value="Pickup">Pickup</option>
                      <option value="Delivery">Delivery</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="inputtprice" class="form-label">Total Price</label>
                    <input type="text" readonly="readonly" class="form-control" id="inputtprice" name="tprice" value="<?php $gttl ;?>">
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
    </div>

    <!--import jquery table-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
       $(document).ready(function ()
            {
            $('#example').DataTable();
            }
            );

    </script> 

    <!--close the connection-->
    <?php
        $conn->close();
    ?>
<?php include "footer.php" ?>