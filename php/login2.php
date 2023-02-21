<?php
session_start();

if(is_array($row))
    {
         $_SESSION["username"]= $row['username'];
         $_SESSION["password"]=$row['password'];
         
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
    ?>