<?php
 //this for starting the session 
  session_start();
  include 'about.php';
if(isset($_POST['login']))
{   
    $password=$_POST['password'];
    $username=$_POST['username'];
  if(!session_id() session start()){}
    extract($_POST);
    include 'db.php';
    //this is slect the row where username and password are the same as the one the user entered
    $sql=mysqli_query($conn,"SELECT * FROM aisha_customer where username='$username' and password='$password'");
    $row = mysqli_fetch_array($sql);
    //this is for authenticating the username and password 
    echo"<a href='login2.php'"></a>;
}
?>
<?php
/*//this for starting the session 
  session_start();
if(isset($_POST['login']))
{   
    $password=$_POST['password'];
    $username=$_POST['username'];
    extract($_POST);
    include 'db.php';
    //this is slect the row where username and password are the same as the one the user entered
    
    $sql=mysqli_query($conn,"SELECT username,password FROM aisha_customer");
    $row = mysqli_fetch_array($sql);
    if(in_array("$username",$row)){
      if(in_array("$password",$row)){
         echo<a href='userinfo.php'></a>;
      }
      else{
        echo "Invalid Email Password";
      }
      
    }
    else
    {
          echo "Invalid Email ID/Password";
    }
}*/
?>