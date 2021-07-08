<?php
      session_start();
      include("db_connect.php");
      if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      if($username == "admin" && $password == "admin"){
        header('location:admin_page.php');
      }
      else{
          echo "invalid credentials";
      }
    }
          
        
  ?>
  <!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/adminlogin.css">
        
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Trade+Winds&display=swap" rel="stylesheet">

    <body>
        <div class="login">
            
            <h1 style="color: black;"><u>Login Form</u></h1>

            <form action="adminlogin.php" method="POST">
                <p style="color: black;"><strong>User Name :</strong></p>
                <input type="text" name="username" placeholder="User Name" required >

                <p style="color: black;"><strong>Password :</strong></p>
                <input type="password" name="password" placeholder="Password" required >
            
                <button type="submmit" name="submit">submit</button>
                

            </form>
        </div>
    </body>
</html>
