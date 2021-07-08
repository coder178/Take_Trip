<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome-5.8.1.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Take @ Trip</title>
</head>
<body>
    <header class="main-header">

        <nav class="navbar navbar-expand-sm scrolling-navbar navbar-dark fixed-top">
            <div class="container">
               
                <a href="index.php" class="navbar-brand">
                    <i class="fa fa-seedling"></i>Take @ Trip</a>
                <button class="navbar-toggler" data-toggle="collpase" data-target="#ui-navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="ui-navbar">
                    <ul class="navbar-nav ml-auto">
                        <div class="btns">
                        <a href="adminlogin.php">
                            <button class="btn">
                                ADMIN LOGIN
                            </button>
                        </a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
      
        <div class="landing-div">
            <div class="landing-wrapper d-flex flex-column h-100 align-items-center justify-content-center text-center">
                <div class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: 80px;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1 class="display-4 animated slideInLeft delay-1s">Enjoy Ultimate Vacations <br> with Us</h1>
                        </div>
                        <div class="carousel-item">
                            <h1 class="display-4 animated slideInRight delay-1s">Make Tours Amazing <br> with Us</h1>
                        </div>
                        <div class="carousel-item">
                            <h1 class="display-4 animated slideInDown delay-1s">Feel Relaxed in Holidays <br> with Us</h1>
                        </div>
                    </div>
                </div>
                <div class="btns" style="margin-top: 150px;">
                  <p style="width: 900px;font-size:25px">Experience the joy of seeing the unknown<br>Login to have an ultimate travelling experience at affordable package<br><a href="login.php">
                    <button class="btn" style="padding: 0.4rem 0.6rem;
                    font-size: 1rem;
                    color: white;
                    background-color: #dc3545;
                    font-weight: 500;
                    border: 2px solid #dc3545;
                    cursor: pointer;
                    border-radius: 15px;
                    margin-top:30px;
                    transition: all 0.3s ease;">
                       USER LOGIN 
                    </button>
                  </a>
                </div>
            </div>
       
        </div>
        
    </header>

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