<?php
$showErrorul=false;
$showErrorsever=false;
$showErrorunimail=false;
$showErrorpass=false;
      
      include("db_connect.php");
      $user_valid="/^[a-zA-Z]+$/";
      $pass_valid ="/(?=.*[a-z])(?=.*[A-Z])(?=.*[$@#&])(?=.*[0-9])[a-zA-Z0-9$@#&]{8,}/";
      
      if($_SERVER['REQUEST_METHOD'] == "POST"){
          $username = $_POST['username'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $cpassword = $_POST["cpassword"];
          
          if(!preg_match($user_valid,$username))
          {
            $showErrorul="Username contains only characters";   
          }
          $existsql="SELECT  * FROM `users` WHERE username = '$username'";
          $result= mysqli_query($conn,$existsql);
          $numexistrows = mysqli_num_rows($result);
        $row =mysqli_fetch_assoc($result);
          if($numexistrows >0){
            $showErrorul = "username already exist";
          }
          
          else if(!preg_match($pass_valid,$password))
          {
            $showErrorpass="password must be in given format";
        
          }
          else if($password != $cpassword){
            $showErrorpass="Password does not match";
          }
          if(empty($email)){
            $showErrorunimail="Use another email id";
           
        }
          if(!($showErrorul) && !($showErrorpass) && !($showErrorunimail))
          {
              $var=base64_encode($password);
             
              $query = "insert into users (username,email,password) values ('$username','$email','$var')";
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
<h2>Welcome to Take @ Trip!!</h2>
<h3>Enjoy holidays with us</h3>
<h3>Keep on checking our website for further updates...</h3> 
</body>
</html>
";


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


 $headers .= 'From: <tourismprojectweb.com>' . "\r\n";

              if (!mail($to, $subject, $message, $headers))
              $showErrorsever="Sever is not responding plz try again later";
              $result1 = mysqli_query($conn,$query);
              if($result1){
               header("location: login.php");
              }
              
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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>

<body>
<?php
     if($showErrorul){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showErrorul.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 
    if($showErrorsever){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showErrorsever.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 
    
    if($showErrorunimail){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showErrorunimail.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 
    if($showErrorpass){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showErrorpass.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 
   
    ?>
    <div class="signin">
        <div class="form-box">
            <div>
                <div class="top">
                    <a href="signin.php"><button type="button" class="toggle-btn" onclick="signin">Sign-in</button></a>
                    <a href="login.php"><button type="button" class="toggle-btn" onclick="login">Login</button></a>
                </div>
            </div>
            <div id="sign-in" class="container">
                <div class="sign-up">
                    <img src="https://img.icons8.com/cotton/48/000000/name--v2.png" />
                    <h1>CREATE ACCOUNT</h1>
                    <div class="form">
                        <form action="signin.php" method="post">
                            <input type="text" name="username" class="input" placeholder="Username" required>
                            
                            <input type="email" name="email" class="input" placeholder="Email" required>
                            <input type="password" name="password" id="psw" class="input" placeholder="Password" required>
                            <h id="message">
                                <div class="validations">
                                    <h3>Password must contain the following:
                                    </h3>
                                    <p id="letter" class="invalid">A
                                       lowercase letter
                                    </p>
                                    <p id="capital" class="invalid">
                                        A capital (uppercase) letter</p>
                                    <p id="number" class="invalid">A
                                        number
                                    </p>
                                    <p id="length" class="invalid">A
                                        length must greater than 8 but less than 15
                                    </p>
                                   
                                </div>
                            </h>
            <script>
                    var myInput = document.getElementById("psw");
                    var letter = document.getElementById("letter");
                    var capital = document.getElementById("capital");
                    var number = document.getElementById("number");
                    var length = document.getElementById("length");

                    myInput.onfocus = function() {
                        document.getElementById("message").style.display = "block";
                    }

                    myInput.onblur = function() {
                        document.getElementById("message").style.display = "none";
                    }

                    myInput.onkeyup = function() {

                        var lowerCaseLetters = /[a-z]/g;
                        if (myInput.value.match(lowerCaseLetters)) {
                            letter.classList.remove("invalid");
                            letter.classList.add("valid");
                        } else {
                            letter.classList.remove("valid");
                            letter.classList.add("invalid");
                        }
                        var upperCaseLetters = /[A-Z]/g;
                        if (myInput.value.match(upperCaseLetters)) {
                            capital.classList.remove("invalid");
                            capital.classList.add("valid");
                        } else {
                            capital.classList.remove("valid");
                            capital.classList.add("invalid");
                        }

                        var numbers = /[0-9]/g;
                        if (myInput.value.match(numbers)) {
                            number.classList.remove("invalid");
                            number.classList.add("valid");
                        } else {
                            number.classList.remove("valid");
                            number.classList.add("invalid");
                        }

                        if( (myInput.value.length >= 8) && (myInput.value.length <=15) ){
                            length.classList.remove(
                                "invalid");
                            length.classList.add("valid");
                        } else {
                            length.classList.remove(
                                "valid");
                            length.classList.add("invalid");
                        }
                    }
                </script>
                            <input type="password" name="cpassword" class="input" placeholder="Confirm password" required>
                            <p> <span><input type="checkbox" name="check" required></span> I agree to the terms of services<br><a href="privacy.php">Privacy Policy</a></p>
                            
                            <button name="submit" type="submit" class="btn">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>