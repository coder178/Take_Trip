<?php
session_start();
$showAlert=false;
$showmailsend=false; 

if($_SERVER["REQUEST_METHOD"]=="POST")
{
include "db_connect.php";
$username=$_SESSION['userame'];
$password=$_POST['password'];
$newpassword=$_POST['cpassword'];
 $sl="SELECT * FROM `users` WHERE `username`='$username'";
 $ret=mysqli_query($conn,$sl);
 $manav= mysqli_num_rows($ret);
 if($manav==1)
 {
    if($password==$newpassword)
{
    $row = mysqli_fetch_assoc($ret);
    $email=$row['email'];
    $var= base64_encode($password);
    $sql="UPDATE `users` SET `password` = '$var' WHERE `users`.`username` = '$username'";
    
        $to = "$email";
$subject = "From Take @ Trip";

$message = "
<html>
<head>
<title></title>
</head>
<body>
<p></p>
<table>
<tr>your password has been updated succesfully

<th></th>
</tr>
<tr>
<td></td>
<td>thank-you</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
 $headers .= 'From: <webmaster@example.com>' . "\r\n";
//$headers .= 'Cc:mmmm' . "\r\n";


mail($to, $subject, $message, $headers);

$result1 = mysqli_query($conn,$sql);
if($result1){
 header("location: login.php");
}





    }

}
else{
    $showAlert="password does not match";
}

 }




?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
        <style>

            .toggle-btn{
                margin: 30px auto;
                padding: 10px 10px;
                color: black;
                text-shadow: 2px 2px 4px black;
                font-weight: 510;
                text-align: center;
                background: transparent;
                border: 2px;
                outline: none;
                position: relative;
                font-size: 25px;
                border-radius: 30px;  
                background: blanchedalmond;
                width: 350px;
                height: 50px;
            }
            .container-login2 small,
            label,
            h1 {
                margin-left: 30px;
            }
            
            .container-login2 input {
                width: 90%;
                margin-left: 30px;
                border: 4px solid white;
                border-radius: 6px;
            }
            
            .container-login2 h2 {
                text-align: center;
            }
            .container-login2 h1{
                margin-bottom:14px;
                margin-top:5px;
            }
            
            .container-login2 {
                background-image: url("https://i.pinimg.com/736x/36/32/de/3632de5afacde20d4d6f83c886f4cbbf.jpg");
                box-shadow: 5px 5px 8px black;
                border: 3px groove white;
                border-radius: 20px;
                margin: auto;
                margin-top: 200px;
                width: 600px;
                position: relative;
                color: white;
                text-align: left;
                font-family: 'Arial';
            }
            
            .container-login2 .login-btn {
                color: white;
                background-color: rgb(18, 144, 194);
                width: 240px;
                height: 40px;
                margin-left: 32%;
                border-radius: 25px;
                margin-bottom: 20px;
                margin-top: 0px;
                border-color: rgb(18, 144, 194); 
                text-align: center;
                font-size: 17px;
                font-weight: 600;
            }
        </style>
    </head>

    <body>
        <?php
       if($showAlert){
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Error! </strong>'.$showAlert.'
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
     </div>';
     } 
     if($showmailsend){
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Success! </strong>'.$showmailsend.'
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
     </div>';
     } 
    ?>

            <form action="newpass.php" method="post">
                <div class="container-login2">
                    <h1>
                        <div class="toggle-btn"> PASSWORD RECOVERY </div>
                    </h1>
                    <label for="password"style="margin-top:5px;">password</label><br>
                    <input type="password" name="password" height="20px" size="35px" placeholder="new password" required>
                    <label for="cpassword"style="margin-top:5px;">confirm password</label><br>
                    <input type="password" name="cpassword" height="20px" size="35px" placeholder="re-enter" required>
                    <br><br>
                    <input type="submit" class="login-btn" value="Change Password" name="change"></input><br>

                </div>
            </form>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>