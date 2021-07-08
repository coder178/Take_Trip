<?php
session_start();
include("db_connect.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $contact = $_POST['phone'];
  $message = $_POST["message"];
  if (empty($username)) {
    $user_err = "username can't be empty";
  }
  if (empty($email)) {
    $email_err = "email can't be empty";
  }
  $existsql = "SELECT  * FROM `users` WHERE username = '$username' and email='$email'";
  $result = mysqli_query($conn, $existsql);
  $numexistrows = mysqli_num_rows($result);

  if (!isset($user_err) &&  !isset($email_err)) {
    if ($numexistrows > 0) {


      $query = "insert into queries (username,email,contact,message) values ('$username','$email','$contact','$message')";
      $to = $email;
      $subject = "";
      $msg = "thankyou for your response. your query has been recorded";
      $headers = 'From: <tourismprojectweb.com>' . "\r\n";
      if (!mail($to, $subject, $msg, $headers))
        echo 'ERROR';
      $result1 = mysqli_query($conn, $query);
      if ($result1) {
        header("location: home.php");
      }
    } else {
      echo "username does not exist";
    }
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      padding: 0;
      margin: 0;
    }

    body {
      background-image: url("https://cdn.wallpapersafari.com/2/40/6nCw2M.jpg");
      background-size: cover;
    }
    .container{
    display: flex;
     justify-content: center;
     flex-direction: column;
     align-items: center;
     
 }
    .form-box {
      width: 500px;
    
    margin-top: 60px;
    height: 570px;
    position: relative;
    margin: 4% auto;
    background-color: rgb(158 214 241);
    border-radius: 9px;
    padding: 50px;
    }
    .input{
     display: block;
     width: 350px;
     height: 35px;
     margin: 10px;
     font-size: 20px;
     border: 2px solid #014e8c;
     background: white;
     color:black;
     font-weight: 200;
     border-radius: 9px;
}
.btn{
     width: 200px;
     height: 40px;
     font-size: 21px;
     background-color: rgba(26,141, 232, 0.633);
     border: none;
     border-radius: 20px;
     color: white;
     margin-top: 10px;
     letter-spacing: 0.1rem;
 }
 .btn:hover{
     background-color: rgb(18, 144, 194);
     color: snow;
     
 }
 h1{
    font-family: 'Roboto Mono', monospace;
     font-weight: 800;
    margin-top:10px;
     margin-bottom: 20px;
     letter-spacing: 0.2rem;
     font-size: 30px;
     color: white;
     background-color: #59aff1;
     padding: 5px 5px;
     border-radius: 10px;
 }
 label{
  font-family: 'Roboto Mono', monospace;
     font-weight: 500;
     margin-bottom: 5px;
     font-size: 25px;
     color:#00417b;
 }
  </style>
</head>

<body>

 

  <div class="container form-box"> <h1>CONTACT US</h1>
    <form action="contact.php" method="POST">
      <label for="name">UserName</label>
      <input type="text" id="name" name="username" class="input" placeholder="Your username..">

      <label for="email">Email</label>
      <input type="text" id="email" name="email" class="input" placeholder="Your Email..">

      <label for="contact">Contact NO.</label>
      <input type="text" id="contact" name="phone" class="input" placeholder="Your contact no..">

      <label for="message">Subject</label>
      <textarea id="message" name="message" class="input" placeholder="Write something.." style="height:200px"></textarea>

      <center><button name="submit" class="btn" type="submmit">submit</button></center>
    </form>
  </div>

</body>

</html>