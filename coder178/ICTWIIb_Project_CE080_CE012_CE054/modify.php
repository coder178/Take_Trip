<?php

if(isset($_POST['modify'])){
    include "db_connect.php";

    $package = $_POST['package'];
    $details = $_POST['details'];
    $know = $_POST['know-more'];
    $image = $_POST['image'];
    $duration = $_POST['duration'];
    $cost = $_POST['cost'];
    $id = $_POST['pid'];
 $sql1 = "UPDATE packages SET package = '{$package}',details = '{$details}',
 know = '{$know}',duration = '{$duration}',cost = '{$cost}',images = '{$image}' WHERE SrNo = {$id} ";
 if(mysqli_query($conn,$sql1)){
     header("Location: http://localhost/grp_project/admin_page.php");
 }
 else{
     echo "Error";
 }
}
if(isset($_POST['modifybest'])){
    include "db_connect.php";

    $package = $_POST['package'];
    $details = $_POST['details'];
    $know = $_POST['know-more'];
    $image = $_POST['image'];
    $duration = $_POST['duration'];
    $cost = $_POST['cost'];
    $id = $_POST['pid'];
 $sql1 = "UPDATE best SET pname = '{$package}',pinfo = '{$details}',
 duration = '{$duration}',pcost = '{$cost}',img = '{$image}' WHERE id = {$id} ";
 if(mysqli_query($conn,$sql1)){
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
<?php
    include "db_connect.php";
    if(isset($_GET['id'])){
    $no = $_GET['id'];
 $sql = "SELECT * FROM packages WHERE SrNO = {$no}";
 $result = mysqli_query($conn,$sql) or die("Query Failed");
 if(mysqli_num_rows($result) > 0)
 {
     while($row = mysqli_fetch_assoc($result)){
 
 ?>
<div class="form">
    <h4>MODIFY TOURISM PACKAGE details here:  </h4>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
<div class="form-group">

<input type="hidden" name="pid" class="form-control" value= "<?php echo $row['SrNo']; ?>">
</div>
<div class="form-group">
<label>Package: </label>
<input type="text" name="package" class="form-control" value="<?php echo $row['package']; ?>">
</div>
<div class="form-group">
<label>Package Details: </label>
<input type="text-area" name="details" class="form-control" value="<?php echo $row['details']; ?>">
</div>
<div class="form-group">
<label>Know more link: </label>
<input type="text" name="know-more" class="form-control" value="<?php echo $row['know']; ?>">
</div>
<div class="form-group">
<label>Image link: </label>
<input type="text" name="image" class="form-control" value="<?php echo $row['images']; ?>">
</div>
<div class="form-group">
<label>Duration: </label>
<input type="text" name="duration" class="form-control" value="<?php echo $row['duration']; ?>">
</div>
<div class="form-group">
<label>Cost: </label>
<input type="text" name="cost" class="form-control" value="<?php echo $row['cost']; ?>" >
</div>
<div class="form-group">

<input type="submit" name="modify" class="btn" value="Save" >
</div>
</form>
<?php 
     }
    }
    }
?>
</div>
<?php
    include "db_connect.php";
    if(isset($_GET['bid'])){
    $no = $_GET['bid'];
 $sql = "SELECT * FROM best WHERE id = {$no}";
 $result = mysqli_query($conn,$sql) or die("Query Failed");
 if(mysqli_num_rows($result) > 0)
 {
     while($row = mysqli_fetch_assoc($result)){
 
 ?>
<div class="form">
    <h4>MODIFY DEAL TOURISM PACKAGE  here:  </h4>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
<div class="form-group">

<input type="hidden" name="pid" class="form-control" value= "<?php echo $row['id']; ?>">
</div>
<div class="form-group">
<label>Package: </label>
<input type="text" name="package" class="form-control" value="<?php echo $row['pname']; ?>">
</div>
<div class="form-group">
<label>Package Details: </label>
<input type="text-area" name="details" class="form-control" value="<?php echo $row['pinfo']; ?>">
</div>

<div class="form-group">
<label>Image link: </label>
<input type="text" name="image" class="form-control" value="<?php echo $row['img']; ?>">
</div>
<div class="form-group">
<label>Duration: </label>
<input type="text" name="duration" class="form-control" value="<?php echo $row['duration']; ?>">
</div>
<div class="form-group">
<label>Cost: </label>
<input type="text" name="cost" class="form-control" value="<?php echo $row['pcost']; ?>" >
</div>
<div class="form-group">

<input type="submit" name="modifybest" class="btn" value="Save" >
</div>
</form>
<?php 
     }
    }
    }
?>
</div>
<section class="home">
        <a href="admin_page.php"><button class="btn-home">
               Back to admin page
            </button></a>
    </section>
</body>
</html>
