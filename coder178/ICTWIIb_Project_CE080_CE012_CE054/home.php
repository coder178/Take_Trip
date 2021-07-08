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
    <link rel="stylesheet" href="css/index.css">
    
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
                        <a href="profile.php?id=<?php echo $_SESSION['userid'];?>">
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

        <div class="landing-div">
            <div class="landing-wrapper d-flex flex-column h-100 align-items-center justify-content-center text-center">
                <div class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1 class="display-4 animated slideInLeft delay-1s">Welcome<span style="color:red;"> <?php echo $_SESSION['username']; ?></span><br>Plan Your Next Trip</h1>
                        </div>
                        <div class="carousel-item">
                            <h1 class="display-4 animated slideInRight delay-1s">Welcome<span style="color:red;"> <?php echo $_SESSION['username']; ?></span><br>Plan Your Next Trip</h1>
                        </div>
                        <div class="carousel-item">
                            <h1 class="display-4 animated slideInDown delay-1s">Welcome<span style="color:red;"> <?php echo $_SESSION['username']; ?></span><br>Plan Your Next Tripp</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <section class="p-4">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-md-6">
                    <h5 class="display-4">It's time to start your adventure</h5>
                    <p>It is often said that India is not a country, but a continent. Stretching from the frozen summits of the Himalayas to the tropical greenery of Kerala, India encompass an incomparable range of landscapes, cultures and people. Travelling in India allows you to meet people of several from the world’s great faiths, encounter temple rituals performed since the time of the Egyptian Pharaohs, and see ancient buildings erected centuries before the Taj Mahal.
                        </p><button class="btn btn-danger" href="#">Explore Tours</button>
                </div>
            </div>
            <div class="boxtags">
                <div class="box">
                    <div class="icons">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="content">
                        <h3>Search!</h3>
                        <p>Search the location you would like to visit.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icons">
                        <i class="fas fa-hand-pointer"></i>
                    </div>
                    <div class="content">
                        <h3>Select!</h3>
                        <p>Select the location , the package and here you go.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icons">
                        <i class="fas fa-hiking"></i>
                    </div>
                    <div class="content">
                        <h3>Enjoy</h3>
                        <p>Have amazing time with your friends and family.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-4">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1>Select Your State</h1>
                    <p class="lead">Dive into indian culture</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3">
                    <a href="packages.php?id=<?php echo $_SESSION['userid'];?>&stid=1">
                    <div class="card dest-card">
                        <div>
                            <img src="images/jammu.jpg" class="img-fluid dest-card-img" alt="" >
                        </div>
                        <div class="dest-card-title">
                            <h3>Jammu-Kashmir</h3>
                        </div>
                        <div class="dest-card-info">
                            <h4>8 Tours</h4>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-md-3">
                <a href="packages.php?id=<?php echo $_SESSION['userid'];?>&stid=2">
                    <div class="card dest-card">
                        <div>
                            <img src="images/gujarat.jpg" class="img-fluid dest-card-img" alt="" >
                        </div>
                        <div class="dest-card-title">
                            <h3>Gujarat</h3>
                        </div>
                        <div class="dest-card-info">
                            <h4>9 Tours</h4>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3">
                <a href="packages.php?id=<?php echo $_SESSION['userid']; ?>&stid=3">
                    <div class="card dest-card">
                        <div>
                            <img src="images/kerala.jpg" class="img-fluid dest-card-img" alt="">
                        </div>
                        <div class="dest-card-title">
                            <h3>Kerala</h3>
                        </div>
                        <div class="dest-card-info">
                            <h4>3 Tours</h4>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3">
                <a href="packages.php?id=<?php echo $_SESSION['userid'];?>&stid=4">
                    <div class="card dest-card">
                        <div>
                            <img src="images/himachal.jpg" class="img-fluid dest-card-img" alt="">
                        </div>
                        <div class="dest-card-title">
                            <h3>HimachalPradesh</h3>
                        </div>
                        <div class="dest-card-info">
                            <h4>5 Tours</h4>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                <a href="packages.php?id=<?php echo $_SESSION['userid'];?>&stid=5">
                    <div class="card dest-card">
                        <div>
                            <img src="images/delhi.jpg" class="img-fluid dest-card-img" alt="">
                        </div>
                        <div class="dest-card-title">
                            <h3>Delhi</h3>
                        </div>
                        <div class="dest-card-info">
                            <h4>7 Tours</h4>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3">
                <a href="packages.php?id=<?php echo $_SESSION['userid'];?>&stid=6">
                    <div class="card dest-card">
                        <div>
                            <img src="images/maharashtra.jpg" class="img-fluid dest-card-img" alt="">
                        </div>
                        <div class="dest-card-title">
                            <h3>maharashtra</h3>
                        </div>
                        <div class="dest-card-info">
                            <h4>5 Tours</h4>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3">
                <a href="packages.php?id=<?php echo $_SESSION['userid'];?>&stid=7">
                    <div class="card dest-card">
                        <div>
                            <img src="images/Rajasthan.jpg" class="img-fluid dest-card-img" alt="">
                        </div>
                        <div class="dest-card-title">
                            <h3>Rajasthan</h3>
                        </div>
                        <div class="dest-card-info">
                            <h4>6 Tours</h4>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3">
                <a href="packages.php?id=<?php echo $_SESSION['userid'];?>&stid=8">
                    <div class="card dest-card">
                        <div>
                            <img src="images/uttar.jpg" class="img-fluid dest-card-img" alt="">
                        </div>
                        <div class="dest-card-title">
                            <h3>UttarPradesh</h3>
                        </div>
                        <div class="dest-card-info">
                            <h4>3 Tours</h4>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="p-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Best Places To Visit In India</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, similique.</p>
                </div>
            </div>
            <?php

            include "db_connect.php";
            
            $sql = "SELECT * FROM `best`";
            $result = mysqli_query($conn, $sql) or die("Query failed");
            if (mysqli_num_rows($result) > 0) {
            ?>
            <div class="packages">
            <div class="row mt-3">
                <?php $num = 0;
                while ($row = mysqli_fetch_assoc($result)) { if($num ==3){
                    break;}
                    ?>
        
                <div class="col-md-4">
                    <div class="card location-card">
                    <img src="<?php echo $row['img']; ?>" height="250px" width="350px">
                       
                        <h4 class="location-price"><?php echo $row['pcost']; ?></h4>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $row['pname']; ?></h3>
                            <p class="card-text"><?php echo $row['pinfo']; ?>
                        </p><a href="book.php?bestid=<?php echo $row['id']; ?>"><button class="btn btn-danger btn-sm">Book Now</button></a>
                        </div>
                    </div>
                </div>

            <?php 
    } ?>

</div>
<div class="row mt-5">
<?php $num = 0;
                while ($row = mysqli_fetch_assoc($result)) { if($num <3){
                    continue;}
                    ?>
                <div class="col-md-4">
                    <div class="card location-card">
                        <img src="<?php echo $row['img']; ?>" class="img-fluid location-img" alt="">
                        <h4 class="location-price"><?php echo $row['pcost']; ?></h4>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $row['pname']; ?></h3>
                            <p class="card-text"><?php echo $row['pinfo']; ?></p><button class="btn btn-danger btn-sm">Book Now</button>
                        </div>
                    </div>
                </div>
        </div>
        <?php 
    } ?>
<?php  } ?>
</div>
</section>
<section>
        <div class="thanks">
            <a href="feedback.php">
                        <button class="mybtn" style="margin-top:-200px;margin-left:700px;margin-bottom:10px;padding: 0.4rem 0.6rem;
    font-size: 20px;color: white;
    background-color: #dc3545;
    font-weight: 500;
    cursor: pointer;
    border-radius: 5px;">
                            Feedback Form
                        </button>
                    </a>
            <h2><marquee behavior="scroll" direction="right" scrollamount="20" style=" font-weight: 700;
    font-size: 50px;
    font-family: 'Jomhuria', cursive;
    -webkit-text-stroke: 1px black;
    color: #dc3545;">Thank-You for visiting</marquee></h2>
        
        </div>
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


<!-- Bootstrap JS Files -->
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/mdb.js"></script>
<script>
    $('.carousel').carousel({
        interval : 2000
    });
</script>
    
</body>

</html>