<?php
session_start();
include "db.php";
$status = "";
if (isset($_POST['code']) && $_POST['code'] != "")
{
$code = $_POST['code'];
$itmname = $_POST['itmname'];
$unit_price = $_POST['unit_price'];
$req_qty = $_POST['req_qty'];
/* echo $req_qty; */
$cartArray = array(
  $code=>array(
  'name'=>$itmname,
  'code'=>$code,
  'price'=>$unit_price,
  'quantity'=>$req_qty,
  )
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";

    // java Script Message for Product is Added....

    echo "<script>
           window.alert('Product is added to your cart!'); 
          </script>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
  $status = "<div class='box' style='color:red;'>
  Product is already added to your cart!</div>"; 
  
    // java Script Message for Product is Already Added....
  
  echo "<script> 
        window.alert('Product is already added to your cart!'); 
        </script>";

    } 
    else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";

    // java Script Message for Product is Added....

    echo "<script> 
          window.alert('Product is added to your cart!'); 
          </script>";

  }

  }

}
?>

<?php
$cart_count = 0;
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
}
?>

<?php
    $title = "Cart page";
    include "header.php";
 ?>
   <!--End of Header part-->
   
  
    <div>
      <!--create row 1-->

      <div class="row">
        
      <p><h1>Menu</h1></p>
        
        <div class="coumn" style="align-items: center;">
        
        <div class="row">

          <div class="col-md-2"></div>
          <div class="col-md-8">
          <br>
      <button type="button"  class="btn btn-success"><a href="cart.php" class="nav-link">Cart (<?php echo $cart_count; ?>)</a></button>
          <div class="row1" >
           <?php 
            $sql = "SELECT * FROM rushani_items WHERE item_status=1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
           ?>
            <div class="column1" >
              <img id="img1" src="../images/<?php echo $row['item_image'];?>" alt="Lettuce salad">
              <p>
                <div style="font-family: 'Courgette', cursive; font-size: 16px;">
                  <div  class="font_r" >
                       <?php echo $row['item_name'];?> 
                  </div>
                  <div  class="font_r" >
                      Price : <?php echo $row['unit_price'];?> 
                  </div>
                  
                </div>
                
              </p>
              

              
                <form method="post" action="">
                <input type="hidden" name="code" value="<?php echo $row['item_nbr']?>" />
                <input type="hidden" name="itmname" value="<?php echo $row['item_name']?>" />
                <input type="hidden" name="unit_price" value="<?php echo $row['unit_price']?>" />
                <input type="text" class="form-control" name="req_qty" />   
                <button class="btn btn-sm btn-success" type="submit">Add to Cart</button>
                <br/><br>
                </form>
              

            </div>
           <?php

              }
             }
           ?> 
          </div>
          </div>
          <div class="col-md-2"></div>
        </div>
          
        

          <div class="message_box" style="margin:10px 0px;">
          <?php echo $status; ?>
          </div>
          


        </div>
      </div>
     <!--Footer-->
     <?php include "footer.php" ?> 
    </div>
  </div>