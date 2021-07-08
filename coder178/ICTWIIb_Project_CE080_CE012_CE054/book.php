<?php
      session_start();
      include("db_connect.php");
      if(isset( $_GET['pid'])){
      $uid = $_SESSION['userid'];
      $pid = $_GET['pid'];

      $query = "insert into bookings (userid,pid) values ('$uid','$pid')";
                  $to = "$email";
            $subject = "From Take @ Trip";
            $message = "
    <html>
    <head>
    <style>
    h2{
    text-align: center;
    font-size: 40px;
    font-weight: 500;    
    }
    </style>
    </head>
    <body>
    <h2> Hello $username</h2>
    <h2>Your Trip is booked</h2>
    <h3>Make the payment just at the begining of your trip</h3>
    <h3>Enjoy holidays with us</h3>
    <h3>Keep on checking our website for further updates...</h3> 
    </body>
    </html>
    ";
    
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    
    $headers .= 'From: <tourismprojectweb.com>' . "\r\n";
    
            if (!mail($to, $subject, $message, $headers)){
            $showErrorsever="Sever is not responding plz try again later";
          }  
          $result1 = mysqli_query($conn,$query);
          if($result1){
            header("location: profile.php");
              }
    }          
    if(isset( $_GET['bestid'])){
        $uid = $_SESSION['userid'];
        $bid = $_GET['bestid'];
        
        $query = "insert into best_bookings (bid,uid) values ('$bid','$uid')";   
            $to = "$email";
            $subject = "From Take @ Trip";
            $message = "
    <html>
    <head>
    <style>
    h2{
    text-align: center;
    font-size: 40px;
    font-weight: 500;    
    }
    </style>
    </head>
    <body>
    <h2> Hello $username</h2>
    <h2>Your Trip is booked</h2>
    <h3>Make the payment just at the begining of your trip</h3>
    <h3>Enjoy holidays with us</h3>
    <h3>Keep on checking our website for further updates...</h3> 
    </body>
    </html>
    ";
    
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    
    $headers .= 'From: <tourismprojectweb.com>' . "\r\n";
    
            mail($to, $subject, $message, $headers); 
          $result1 = mysqli_query($conn,$query);
          if($result1){
            header("location: profile.php");
           }     
      }
?>