<?php
session_start();
include('db_access.php');
if(isset($_POST['user']) && isset($_POST['pass'])) {
    // username and password sent from form 
    
     $myuser = $_POST['user'];
     $mypassword = $_POST['pass'];

     echo $myuser.$mypassword;

     
      $sql = "SELECT * FROM user WHERE email = '".$myuser."' OR username = '".$myuser."'";
     $result = mysqli_query($conn, $sql);  
     

     $count = mysqli_num_rows($result);
    echo $count;
    
    // If result matched $myusername and $mypassword, table row must be 1 row         
    if($count == 1) {
     //   session_register("myname");     
     $getUser =  mysqli_fetch_array($result,MYSQLI_ASSOC);

     if(password_verify($mypassword,$getUser['pass'])){
      $_SESSION['logged_user'] = $getUser['username'];
      $_SESSION['logged_role'] = $getUser['role'];                            
      header("location: ../index.php");
      die();
     }else{
        echo 'Password Invalid';
     }
     
 
      
     

    }else {
       $error = "User Not Found";
       echo $error;

    }
 }else{
     echo 'Data tidak lengkap';
     header("location: ../login.php");
     die();
 }
?>