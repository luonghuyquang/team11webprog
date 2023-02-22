<?php
ob_start();
$title = "Add Items page";
include "header.php"; 
include "db.php";

// save items..
if(isset($_POST['saveitm'])){
    $itmname = $_POST['itmname'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $img = $_FILES["itemimg"]["name"];
  
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["itemimg"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["itemimg"]["tmp_name"], $target_file)) {
      
      $sql = "INSERT INTO rushani_items(item_name,unit,unit_price,quantity,item_image,item_status) VALUES ('$itmname','$unit','$price','$qty','$img',1)";
  
            if ($conn->query($sql) === TRUE) {
              echo "<script type='text/javascript'>alert('New ITEM added successfully')</script>";
            } else {
              echo "<script type='text/javascript'>alert('error creating items')</script>";
            }
    }
  }
  
  // active inactive items
  if(isset($_GET['sid'])){
    $sid = $_GET['sid'];
    $stts = $_GET['stts'];
  
    $sqlupdstts = "UPDATE rushani_items SET item_status='$stts' WHERE item_nbr='$sid'";
    if ($conn->query($sqlupdstts) === TRUE) {
              echo "<script type='text/javascript'>alert('ITEM Status updated successfully')</script>";
              header("location:add_items.php");
            } else {
              echo "<script type='text/javascript'>alert('error Update items status')</script>";
              header("location:add_items.php");
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
                            <input type="text"  class="form-control" id="inputFirstName" name="itmname" placeholder="Item Name">
                    </div>

                    <div class="col-md-6">
                        <label for="inputLastName" class="form-label">Unit</label>
                        <br>
                        <select name="unit"  class="form-control" id="inputFirstName" >

                            <option value="Small" > Small </option>
                            <option value="Medium" > Medium </option>
                            <option value="Large" > Large </option>

                        </select>

                    </div>

                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Price</label>
                        <input type="text" class="form-control" id="inputEmail" name="price" placeholder="0.00" >
                    </div>
                    
                   

                    <div class="col-md-6">
                        <label for="inputPhone" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="inputPhone" name="qty" placeholder="0" >

                    </div>

                    <div class="col-md-6">
                        <label for="inputNumber" class="form-label">Image</label>
                        <input type="file" class="form-control" id="inputNumber" name="itemimg" placeholder="Input Image" >

                    </div>

                    <div class="col-md-6" style="padding-top: 5px;">
                        <div class="col-md-12">
                        <br><br>
                            <button type="submit" class="btn11" style="padding-left: 25px;padding-right: 25px;" name="saveitm"> Save </button>
                            
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
        <div class="row">
          <div class="col-md-1"></div>
        <div class="col-md-10" style="background-color:white;" padding-top:5px;>
        
          <table class="table" id="example" style="background-color:lightgray;">
            <thead>
            <tr>
              <th>ITEM NAME</th>
              <th>UNIT</th>
              <th>UNIT PRICE</th>
              <th>QUANTITY</th>
              <th>STATUS</th>
              <th></th>
            </tr>
            </thead>
            <tbody>

            <?php
            //get all items..
            $sql = "SELECT * FROM rushani_items";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                 ?>
                 <tr>
                    <td><?php echo $row['item_name'];?></td>
                    <td><?php echo $row['unit'];?></td>
                    <td><?php echo $row['unit_price'];?></td>
                    <td><?php echo $row['quantity'];?></td>
                    <td><?php
                     if($row['item_status']==1){
                      echo "Active&nbsp;&nbsp;";
                      echo "<a class='btn btn-sm btn-primary' href='?sid=".$row['item_nbr']."&&stts=0'>Inactive me</a>";
                     }else{
                      echo "Inactive&nbsp;&nbsp;";
                      echo "<a class='btn btn-sm btn-warning' href='?sid=".$row['item_nbr']."&&stts=1'>Active me</a>";
                     }
                    ?></td>
                    <td><a class="btn btn-sm btn-success" href="edit_item.php?id=<?php echo $row['item_nbr'];?>">Edit</a></td>
                  </tr>
                 <?php
                }
              }
            ?>
          </tbody>
          </table>
            
        </div>
        <div class="col-md-1"></div>
            </div>
      </div>

    </div>
    
    
</body>
<?php
$conn->close();
?>



    
<?php include "footer.php" ?>