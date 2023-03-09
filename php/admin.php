<?php

//include "header.php"; 

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
    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AMARILLO</title>
  <!--Bootstrap CSS code-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
  <!--Bootstrap JS code-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">


  <link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet">

  <!--Local CSS files to be merged together-->
  <link rel="stylesheet" href="../style/style2.css">
  <link rel="stylesheet" href="../style/style.css">
  
<!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>  



<style>
body{
    background-color: #D4A59A;
}    

#hea {
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

<div id="hea">
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
                <td> <h4> <input type="password" name="password" placeholder="Enter Password" /> </h4> </td>

                </tr>

                <tr>
                <td> </td>


                <td> <input type="submit" class="btn btn-success" name="submit" value="Login" /> 
                 <input type="reset" class="btn btn-success" name="clear" Value="Clear" /> </td>

                </tr>

                <tr>
                <td> </td>
                <td>
                <h6> <a href="index.php" style="color: black;"> Back </a> </h6>
                  </td>
                </tr>

                


            </table>

        </form>

    </div>
  



</body>
</html>


