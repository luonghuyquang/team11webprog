<?php
ob_start();
$title = "Edit Items page";
include "header.php"; 
include "db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM rushani_items WHERE item_nbr='$id'";
$result = $conn->query($sql); 
$row = $result->fetch_assoc();

// save items..
if(isset($_POST['editbht'])){
    $itemid = $_POST['itemid'];
    $itmname = $_POST['itmname'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

      
     // $sql = "INSERT INTO rushani_items(item_name,unit,unit_price,quantity,item_image,item_status) VALUES ('$itmname','$unit','$price','$qty','$img',1)";
     $sql = "UPDATE rushani_items SET item_name='$itmname',unit='$unit',unit_price='$price',quantity='$qty' WHERE item_nbr='$itemid'";
  
            if ($conn->query($sql) === TRUE) {
              header("location:add_items.php");
              echo "<script type='text/javascript'>alert(Updated successfully')</script>";
            } else {
              echo "<script type='text/javascript'>alert('error update items')</script>";
            }
   
  }
  
 
  
  ?>
  

<div class="container">

<div class="row">

<br>
<h1>Add New Item</h1>
<br>

<div class="col-md-6">                                 
    <img  style="width: 400px; height: 300px;" src="../images/ifram.jpg" />
</div>

<div class="col-md-6">    
<div class="container">

    <div class="row align-items-center">
 
       
       <div class="col-md-12">
                

                
                <form  class="row g-3" action="" method="post" enctype="multipart/form-data">

                
                
                    <div class = "col-md-6">
                            <label for="inputFirstName" class="form-label">Item Name</label>
                            <input type="hidden" name="itemid" value="<?php echo $id;?>">
                            <input type="text"  class="form-control" id="inputFirstName" name="itmname" placeholder="Item Name" value="<?php echo $row['item_name'];?>">
                    </div>

                    <div class="col-md-6">
                        <label for="inputLastName" class="form-label">Unit</label>
                        <br>
                        <select name="unit"  class="form-control" id="inputFirstName" >

                            <option value="Small" <?php if($row['unit']=="Small"){echo "selected"; }?>> Small </option>
                            <option value="Medium" <?php if($row['unit']=="Medium"){echo "selected"; }?>> Medium </option>
                            <option value="Large" <?php if($row['unit']=="Large"){echo "selected"; }?>> Large </option>

                        </select>

                    </div>

                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Price</label>
                        <input type="text" class="form-control" id="inputEmail" name="price" placeholder="0.00"  value="<?php echo $row['unit_price'];?>">
                    </div>
                    
                   

                    <div class="col-md-6">
                        <label for="inputPhone" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="inputPhone" name="qty" placeholder="0" value="<?php echo $row['quantity'];?>" >

                    </div>

                    

                    <div class="col-md-6" style="padding-top: 5px;">
                        <div class="col-md-12">
                        <br><br>
                            <button type="submit" class="btn11" style="padding-left: 25px;padding-right: 25px;" name="editbht"> EDit </button>
                            
                        </div>
                            
                    </div>

                    

                               
                </form>

                 </div>
              </div>
            </div>
        </div>
     </div>
</div>
<br>

<div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript">
   $(document).ready(function () {
    $('#example').DataTable();
});

 </script> 
        <!-- create a table-->
       
      </div>

    </div>
    
    
</body>
<?php
$conn->close();
?>



    
<?php include "footer.php" ?>