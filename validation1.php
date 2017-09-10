<?php

    $username = $_POST ['username'];
    $password = $_POST ['password'];
   
    //Connect to the server and select database
  $connection = mysqli_connect("localhost", "root", "");
   mysqli_select_db($connection, "librvry");

  //Query the database for user
  $result = mysqli_query($connection, "select * from userdb where username = '$username' and password = '$password'  ") or die("Failed to query database ".mysqli_error($connection));
 
 //Fetch the result into an array
  $row = mysqli_fetch_array($result);
 
 
  if ($row['username'] == $username && $row['password'] == $password)
  {  
     
    header("Location:adminpage.html");

  }
   else
  {
   header("Location:login1.php");
  }



?>