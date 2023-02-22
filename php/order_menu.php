<?php
    $title = "Order menu page";
    include "header.php"; 
    include "db.php";

    session_start();
    include "db.php";
    $status = "";
 if (isset($_POST['code']) && $_POST['code']!="")
    {
        $code = $_POST['code'];
        $itmname = $_POST['itmname'];
        $unit_price = $_POST['unit_price'];
        $req_qty = $_POST['req_qty'];
        echo $req_qty;
        $cartArray = array(
        $code=>array(
            'name'=>$itmname,
            'code'=>$code,
            'price'=>$unit_price,
            'quantity'=>$req_qty,
        )
        );

if(empty($_SESSION["shopping_cart"])) 
{
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div class='box'>Product is added to your cart!</div>";
}
else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($code,$array_keys)) {
        $status = "<div class='box' style='color:red;'>
        Product is already added to your cart!</div>";  
    } 
else{
        $_SESSION["shopping_cart"] = array_merge(
        $_SESSION["shopping_cart"],
        $cartArray
        );
        $status = "<div class='box'>Product is added to your cart!</div>";
  }

  }

}
?>

<?php
    $cart_count = 0;
if(!empty($_SESSION["shopping_cart"])) 
    {
    $cart_count = count(array_keys($_SESSION["shopping_cart"]));
    }
?>

<div class="row">
        
        <div class="coumn right">
        
          <div class="row1">
           <?php 
            $sql = "SELECT * FROM rushani_items WHERE item_status=1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) 
              {
                // output data of each row
                while($row = $result->fetch_assoc()) 
                {
           ?>
            <div class="column1">
              <img id="img1" src="../images/<?php echo $row['item_image'];?>" alt="Lettuce salad" style="width:100%">
              <p><?php echo $row['item_name'];?></p>
              <p>Price : <?php echo $row['unit_price'];?></p>
              <p>Qty : <?php echo $row['quantity'];?></p>

              <center>
                <form method="post" action="">
                <input type="hidden" name="code" value="<?php echo $row['item_nbr']?>" />
                <input type="hidden" name="itmname" value="<?php echo $row['item_name']?>" />
                <input type="hidden" name="unit_price" value="<?php echo $row['unit_price']?>" />
                <input type="text" class="form-control" name="req_qty" />

                <button class="btn btn-sm btn-success" type="submit">Add to Cart</button>
                </form>
              </center>

            </div>
           <?php

              }
             }
           ?> 
          </div>

          <div class="message_box" style="margin:10px 0px;">
          <?php echo $status; ?>
          </div>
          


        </div>
      </div>
      



<?php include "footer.php" ?>