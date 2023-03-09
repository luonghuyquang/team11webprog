<?php
session_start();

if(isset($_POST['btncomplete'])){
    unset($_SESSION["shopping_cart"]);
    $_SESSION['username'] = "";
    $_SESSION['address'] = "";
    $_SESSION['phone'] = "";
    $_SESSION['types'] = "";
    $_SESSION['gttl'] = "";
    $_SESSION['order_time'] = "";

    header("location:menu.php");
}
?>
<html>

<head> 
<style>

@media print {
  /* style sheet for print goes here */
  .noprint {
    visibility: hidden;
  }
}

</style>

<style>
body{
    background-color: #D4A59A;
}    
#header {
    background-color: #5C2018;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color: #D4A59A;
    height:10px;
    width:300px;
    float:left;
    padding:5px;	      
}
#section {
    background-color: #D4A59A;
    width:700px;
    float:left;
    padding:10px;	 	 
}
#footer {
    background-color: #5C2018;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 	 
}
</style>


</head>
<body>

<div id="header">
<h1>Order Receipt</h1>
</div>

<div id="nav">

</div>

<!-- customer Details -->
<div id="section">
<h1>Customer Details </h1>
<table border="0" width="400" >
    <tr> 
        <th align="left"> Customer </th> <td align="left"> <?php echo $_SESSION['username'];?> </td>
     </tr>

     <tr> 
        <th align="left"> Address </th> <td align="left"> <?php echo $_SESSION['address'];?> </td>
     </tr>

     <tr> 
        <th align="left"> Phone No </th> <td align="left"> <?php echo $_SESSION['phone'];?> </td>
     </tr>

     <tr> 
        <th align="left"> Type </th> <td align="left"> <?php echo $_SESSION['types'];?> </td>
     </tr>

     <tr> 
        <th align="left"> Total Amount </th> <td align="left"> <?php echo $_SESSION['gttl'];?> </td>
     </tr>

     <tr> 
        <th align="left"> Time </th> <td align="left"> <?php echo $_SESSION['order_time'];?> </td>
     </tr>
</table>
<br>
<br>


<!-- order Details -->

<table class="table" width="700">
    <tbody>
     <caption> <h4> Order Details  </h4> </caption>
      <tr>
        
        <th>ITEM NAME</th>
        <th>QUANTITY</th>
        <th>UNIT PRICE</th>
        <th>SUB TOTAL </th>
      </tr> 
<?php   

    foreach ($_SESSION["shopping_cart"] as $product)
    {
?>
     <tr>
        
        <td align="center"><?php echo $product["name"]; ?><br />
            <form method='post' action=''>
                <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                <input type='hidden' name='action' value="remove" />
            </form>
        </td>
        <td align="center">
            <form method='post' action=''>
                <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                <input type='hidden' name='action' value="change" />

            </form>
        <?php echo "".$product["quantity"]; ?>
        </td>

        <td align="center"><?php echo "".$product["price"]; ?></td>
        <td align="center"><?php echo "".$product["price"]*$product["quantity"]; ?></td>
     </tr>
        <?php
    }
?>
    <tr>
        <td colspan="5" align="right">
        <strong>TOTAL: <?php echo $_SESSION['gttl']; ?></strong>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td> <button class="noprint" onclick="window.print()">Print this page</button> </td>
    </tr>
    <tr>   
    <td></td>
        <td></td>
        <td><form action="" method="post"> <button class="noprint" type="submit" name="btncomplete">Complete Order</button></form> </td>
    </tr>
    </tbody>
    </table>
    </div>


<div id="footer">

</div>
  



</body>
</html>
