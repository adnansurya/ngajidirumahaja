<?php
session_start();  
include('db_access.php');


if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['nickname']) && isset($_GET['role'])
    && isset($_GET['username']) && isset($_GET['pass'])){

      $hashed_pass =  password_hash($_GET['pass'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO user (username, pass, name, address, email, telegram_id, nickname, role, hp) 
              VALUES ('".$_GET['username']."','".$hashed_pass."','".$_GET['name']."','".$_GET['address']."',
              '".$_GET['email']."','".$_GET['telegram_id']."','".$_GET['nickname']."','".$_GET['role']."',
              '".$_GET['hp']."')";
            
            $result = mysqli_query($conn, $sql);


                
     }

header('Location: ../data_user.php');     
die()
?>