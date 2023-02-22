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
    <th>customerid</th><th>First name</th><th>Last name</th><th>username</th><th>email</th>
    </tr>";
}
$conn->close();
?>
<?php
include "footer.php"
?>