<?php
session_start();
         $status="";
    if (isset($_POST['action']) && $_POST['action']=="remove")
    {
        
        if(!empty($_SESSION["shopping_cart"])) 
        {
           // print_r($_SESSION["shopping_cart"]);
            foreach($_SESSION["shopping_cart"] as $key => $value) 
            {
                //print_r($value);
                if($_POST["code"] ==$value["code"])
                {
                    unset($_SESSION["shopping_cart"][$key]);
                    $status = "<div class='box' style='color:red;'>
                    Product is removed from your cart!</div>";
                }
            if(empty($_SESSION["shopping_cart"]))
             unset($_SESSION["shopping_cart"]);
            }		
        }
    }

    if (isset($_POST['action']) && $_POST['action']=="change")
    {
        foreach($_SESSION["shopping_cart"] as &$value)
        {
            if($value['code'] === $_POST["code"])
            {
                 $value['quantity'] = $_POST["quantity"];
                break; // Stop the loop after we've found the product
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



<?php
    $title = "Cart page";
    include "header.php";
 ?>
    <!--End of Header part-->
    
    <div class="container">

        <div class="message_box" style="margin:10px 0px;">
             <?php echo $status; ?>
        </div> 

      
        <div class="row">
        <div class="col-md-12">
          <div class="cart">
<?php
    if(isset($_SESSION["shopping_cart"]))
    {
         $total_price = 0;
?>  
    <table class="table">
    <tbody>
      <tr>
        <td></td>
        <td>ITEM NAME</td>
        <td>QUANTITY</td>
        <td>UNIT PRICE</td>
        <td>SUB TOTAL </td>
      </tr> 
<?php   

    foreach ($_SESSION["shopping_cart"] as $product)
    {
?>
     <tr>
        <td>

        </td>
        <td><?php echo $product["name"]; ?><br />
            <form method='post' action=''>
                <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                <input type='hidden' name='action' value="remove" />
                <button type='submit' class='remove btn btn-sm btn-danger'>Remove Item</button>
            </form>
        </td>
        <td>
            <form method='post' action=''>
                <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                <input type='hidden' name='action' value="change" />

            </form>
        <?php echo "".$product["quantity"]; ?>
        </td>

        <td><?php echo "".$product["price"]; ?></td>
        <td><?php echo "".$product["price"]*$product["quantity"]; ?></td>
     </tr>
        <?php
            $total_price += ($product["price"]*$product["quantity"]);
    }
?>
    <tr>
        <td colspan="5" align="right">
        <strong>TOTAL: <?php echo "".$total_price; ?></strong>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td><a class="btn btn-lg btn-success" href="proceed.php?tprice=<?php echo $total_price; ?>">Proceed order</a></td>
    </tr>
    </tbody>
    </table>    
<?php
    }
    else
    {
         echo "<h3>Your cart is empty!</h3>";
    }
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
     </div>
    </div>
  </div>

</div>
    <!--Footer-->
          <?php include "footer.php" ?>


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
/*
$conn->close(); */
?>
</html>