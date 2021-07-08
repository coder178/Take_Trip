<?php
$usererror=false;
$passworderror=false;
      session_start();
      include("db_connect.php");
      if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $var=base64_encode($password);
      $sql="select * from users where username = '$username' && password='$var'";
      $result= mysqli_query($conn,$sql);
      $numexistrows = mysqli_num_rows($result);
  
      if($numexistrows ==1){
           $row=mysqli_fetch_assoc($result);
            $_SESSION['userid'] = $row['user_id'];
          $_SESSION['username'] = $username;
          header('location:home.php');    
      }
      else{ 
        $usererror="invalid credential";
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<?php
     if($usererror){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$usererror.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 
    if($passworderror){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$passworderror.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 
    ?>
    <div class="login1">
        <div class="form-box">
            <div>
                <div class="top">
                <a href="signin.php"><button type="button" class="toggle-btn" onclick="signin">Sign-in</button></a>
                    <a href="login.php"><button type="button" class="toggle-btn" onclick="login">Login</button></a>
                </div>
            </div>
            <div id="login" class="login">
                <img src="https://img.icons8.com/cotton/48/000000/name--v2.png" />
                <h1>LOGIN HERE</h1>

                <form action="#" method="POST">

                    <input type="text" name="username" class="input2" placeholder="User Name" required>


                    <input type="password" name="password" class="input2" placeholder="Password" required>
<p><a href="forgot.php">Forgot password?</a></p>
                    <center><button name="submit" type="submmit">submit</button></center>
                    
                </form>
            </div>
        </div>
</body>

</html>