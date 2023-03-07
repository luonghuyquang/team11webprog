<?php
$title="Reading data from the database";
include "header.php";
include "db.php";
$sql="select * from aisha_customer";
$results=$conn->query($sql);
if($results->num_rows>0){
    
    echo"
    <table class='table'>
    <tr>
    <th>Email</th><th>First name</th><th>Last name</th><th>Phone number</th><th>Address</th><th>Password</th><th>Membershipid</th>
    </tr>
    <tr>
    <td><?php echo $results[fname]; ?></td>
    <td><?php echo $results[lname]; ?></td>
    <td><?php echo $results[phone_nbr]; ?></td>
    <td><?php echo $results[address]; ?></td>
    <td><?php echo $results[password]; ?></td>
    <td><?php echo $results[membershipid]; ?></td>
    </tr>
    ";
    
}
$conn->close();
?>
<?php
include "footer.php"
?>