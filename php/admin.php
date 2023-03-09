<?php
include "header.php"; 

if(isset($_POST['submit'])){
    if (($_POST['username']) == "admin" && ($_POST['password']) == "123")
    {
       
        header("location:add_items.php");

    }
    else{

        echo "<script>
           window.alert('Username or Password is incorrect ...!'); 
          </script>";
    }
    

}
?>


<html>

<head> 
    



<style>
body{
    background-color: #D4A59A;
}    

#header {
    background-color: #5C2018;
    color:white;
    text-align:center;
    padding:5px;
    height: 100px;
}

#nav {
    line-height:30px;
    background-color: #D4A59A;
    height:100px;
    width:300px;
    float:left;
    padding:5px;	      
}
#section {
    background-color: #D4A59A;
    width:700px;
    float:left;
    padding:100px;

}


</style>


</head>
<body>

<div id="header">
</div>

<div id="nav">
</div>

    <div id="section">
        <h1> Admin Login </h1>
        <form method = "POST" action="" >
            <table border="0" width="500">
                <tr>
                    
                <td> <h4> Username  </h4> </td>
                <td> <h4> <input type="text" name="username" placeholder="Enter Username" /> </h4> </td>

                </tr>

                <tr>
                <td> <h4> Password </h4> </td>
                <td> <h4> <input type="text" name="password" placeholder="Enter Password" /> </h4> </td>

                </tr>

                <tr>
                <td> </td>


                <td> <input type="submit" class="btn btn-success" name="submit" value="Login" /> 
                 <input type="reset" class="btn btn-success" name="clear" Value="Clear" /> </td>

                </tr>


            </table>
        </form>

    </div>
  



</body>
</html>


