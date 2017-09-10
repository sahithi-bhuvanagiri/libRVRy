<?php 
 require 'database-config.php';

 session_start();

 $username = "";
 $password = "";
 
 if(isset($_POST['username'])){
  $username = $_POST['username'];
 }
 if (isset($_POST['password'])) {
  $password = $_POST['password'];

 }
 

 $q = 'SELECT * FROM usersdb WHERE username=:username AND password=:password';

 $query = $dbh->prepare($q);

 $query->execute(array(':username' => $username, ':password' => $password));


 if($query->rowCount() == 0){
  header('Location: login.php');
 }else{

  $row = $query->fetch(PDO::FETCH_ASSOC);

  //session_regenerate_id();
  //$_SESSION['sess_user_id'] = $row['id'];
  $_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_usertype'] = $row['usertype'];

        //echo $_SESSION['sess_usertype'];
  session_write_close();

  if( $_SESSION['sess_usertype'] == "admin" ){
   header('Location: adminpage.php');
  }else{
   header('Location: mainpage.php');
  }
  
  
 }


?>
