<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Packages</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome-5.8.1.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" href="css/packages.css">
   
    
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>

<body>
   
<header class="main-header">

        <nav class="navbar navbar-expand-sm scrolling-navbar navbar-dark fixed-top">
            <div class="container">
               
                <a href="home.php" class="navbar-brand">
                    <i class="fa fa-seedling"></i>Take @ Trip</a>
                <button class="navbar-toggler" data-toggle="collpase" data-target="#ui-navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="ui-navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item px-2">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                       
                        <li class="nav-item px-2">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <div class="btns">
                        <a href="profile.php?id=<?php echo $_SESSION['uid'];?>">
                        <button class="btn">
                            PROFILE
                        </button>
                    </a>
                    <a href="logout.php">
                        <button class="btn">
                            LOGOUT
                        </button>
                    </a>
                     
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
include "db_connect.php";
  $stid = $_GET['stid'];
  $uid = $_GET['id'];
  $sql="select state_name from states where state_id = $stid";
  $result= mysqli_query($conn,$sql);
      $numexistrows = mysqli_num_rows($result);
  
           $row=mysqli_fetch_assoc($result);
           $statename=$row['state_name'];
  ?>
        <div class="landing-div">
            <div class="landing-wrapper d-flex flex-column h-100 align-items-center justify-content-center text-center">
                <div class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1 class="display-4 animated slideInLeft delay-1s">Best Places To Visit In<span style="color:red;"> <?php echo $statename; ?></span></h1>
                        </div>
                        <div class="carousel-item">
                            <h1 class="display-4 animated slideInLeft delay-1s">Best Places To Visit In<span style="color:red;"> <?php echo $statename; ?></span></h1>
                        </div>
                        <div class="carousel-item">
                            <h1 class="display-4 animated slideInLeft delay-1s">Best Places To Visit In<span style="color:red;"> <?php echo $statename; ?></span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <section class="page2">
        <?php
  
      include "db_connect.php";
     
  $sqli = "SELECT p.SrNo,p.package,p.images,p.details,p.duration,p.cost,p.know FROM packages p INNER JOIN states s ON p.st_id = s.state_id  WHERE p.st_id=$stid";
 
  $result = mysqli_query($conn, $sqli) or die("query failed");
  if(mysqli_num_rows($result) > 0){
?>
<div class="packages">
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        
        <div class="packagebox">
                <div class="boximage">
                    <img src="<?php echo $row['images']; ?>" height="350px" width="320px">
                </div>
                <div class="packagecontent">
                    <h2><?php echo $row['package']; ?></h2>
                    <p>
                    <?php echo $row['details']; ?> 
                    </p>
                   <strong><h4>To know more -</strong> <a href="<?php echo $row['know']; ?>">Click here</a></h4>
                    <strong><h4>Package :</strong> <?php echo $row['duration']; ?></h4>
                    <strong><h4>cost :</strong> <?php echo $row['cost']; ?></h4>
                            <div class="buttons21">
                            <a href="book.php?pid=<?php echo $row['SrNo']; ?>"><button class="btn">
                                <b>Book here</b>
                            </button></a>
        </div>
                </div>
        </div>
</div>

            <?php } ?>
    <?php  } ?>
    </section>
    <section class="home">
        <a href="home.php"><button class="btn-home" style="    background-color: #e84545;
    border-radius: 8px;
    font-size: 25px;
    color: white;
    margin-top: 30px;
    margin-left: 1300px;">
               Back to Home
            </button></a>
    </section>
    <footer class="main-footer mt-4">
        <div class="footer-wrapper">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Contact Us</h4>
                
                        <ul style="list-style-type: circle;">
                          <li>
                            <a href="about_us.php">About Us</a>
                          </li>
                          <li>
                            <a href="privacy.php">Privacy Policy</a>
                          </li>
                        </ul>
                
                        <strong>tourismprojectweb@gmail.com</strong>
                    
                      </div>
                    
                    <div class="col-md-3">
                        <h2>Experience</h2>
                        <p>Adventures</p>
                        <p>Tours</p>
                        <p>quires</p>
                        <p>Online Bookings</p>

                    </div>
                    <div class="col-md-3">
                        <h2>Follow Us On</h2>
                        
                        <div class="d-flex justify-content-between">
                            <i class="fab fa-facebook-square text-primary fa-2x"></i>
                            <i class="fab fa-twitter text-info fa-2x"></i>
                            <i class="fab fa-instagram text-danger fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            Copyright <i class="far fa-copyright"></i> 2021 <span> Take a trip @ Gujarat </span> All rights reserved.
          </div>
    </footer>
    <script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/mdb.js"></script>
<script>
    $('.carousel').carousel({
        interval : 5000
    });
</script>
</body>
</html>