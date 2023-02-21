<?php
$title = "AboutUs page";
include "header.php" ?>

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

    <div class="row  align-items-center">
 
       
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
     <div class="row">
        <div class="col-md-12">
          <table class="table" id="example">
            <thead>
            <tr>
              <td>item name</td>
              <td>unit</td>
              <td>unit price</td>
              <td>quantity</td>
              <td>status</td>
              <td></td>
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
                echo "Active";
                echo "<a class='btn btn-sm btn-primary' href='?sid=".$row['item_nbr']."&&stts=0'>Inactive me</a>";
               }else{
                echo "Inactive";
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
</div>


</div>



</div>

    
<?php include "footer.php" ?>