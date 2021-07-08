<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/view.css">
    <title>Document</title>
</head>
<body>
<section class="page2">
        <?php
  
      include "db_connect.php";
      if(isset($_GET['id'])){
      $no = $_GET['id'];
      $sql = "SELECT * FROM packages WHERE SrNO = {$no}";
     
      
  
  $result = mysqli_query($conn, $sql) or die("query failed");
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
                            
                </div>
        </div>
</div>

            <?php } ?>
    <?php  } ?>
    <?php  } ?>
    
    <?php
  include "db_connect.php";
  if(isset($_GET['did'])){
  $no = $_GET['did'];
  $sql = "SELECT * FROM best WHERE id = {$no}";
 
  

$result = mysqli_query($conn, $sql) or die("query failed");
if(mysqli_num_rows($result) > 0){
?>

<div class="packages">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    
    <div class="packagebox">
            <div class="boximage">
                <img src="<?php echo $row['img']; ?>" >
            </div>
            <div class="packagecontent">
                <h2><?php echo $row['pname']; ?></h2>
                <p>
                <?php echo $row['pinfo']; ?> 
                </p>
              
                <strong><h4>Duration</strong> <?php echo $row['duration']; ?></h4>
                <strong><h4>cost</strong> <?php echo $row['pcost']; ?></h4>
                        
            </div>
    </div>
</div>

        <?php } ?>
<?php  } ?>
<?php  } ?>
    </section>
    
    <section class="home">
        <a href="admin_page.php"><button class="btn-home">
               Back to Home
            </button></a>
    </section>
</body>
</html>