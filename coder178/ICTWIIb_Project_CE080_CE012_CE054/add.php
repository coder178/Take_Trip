<?php

if(isset($_POST['save'])){
    include "db_connect.php";
    $package = $_POST['package'];
    $stid = $_POST['stid'];
    $details = $_POST['details'];
    $know = $_POST['know-more'];
    $image = $_POST['image'];
    $duration = $_POST['duration'];
    $cost = $_POST['cost'];

 $sql = "INSERT INTO packages (package,st_id,details,know,duration,cost,images)
 VALUES('{$package}','{$stid}','{$details}','{$know}','{$duration}','{$cost}','{$image}')";
 if(mysqli_query($conn,$sql)){
     header("Location: http://localhost/grp_project/admin_page.php");
 }
 else{
     echo "Error";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./css/add.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form">
    <h4>Add TOURISM PACKAGE details here:  </h4>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
<div class="form-group">
<label>Package: </label>
<input type="text" name="package" class="form-control" >
</div>
<div class="form-group">
<label>state id: </label>
<input type="text" name="stid" class="form-control" >
</div>
<div class="form-group">
<label>Package Details: </label>
<input type="text-area" name="details" class="form-control" >
</div>
<div class="form-group">
<label>Know more link: </label>
<input type="text" name="know-more" class="form-control" >
</div>
<div class="form-group">
<label>Image link: </label>
<input type="text" name="image" class="form-control" >
</div>
<div class="form-group">
<label>Duration: </label>
<input type="text" name="duration" class="form-control" >
</div>
<div class="form-group">
<label>Cost: </label>
<input type="text" name="cost" class="form-control" >
</div>
<div class="form-group">

<input type="submit" name="save" class="btn" value="Save" >
</div>
</form>
</div>
<section class="home">
        <a href="admin_page.php"><button class="btn-home">
               Back to admin page
            </button></a>
    </section>
</body>
</html>