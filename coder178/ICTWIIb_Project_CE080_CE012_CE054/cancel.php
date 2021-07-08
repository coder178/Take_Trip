<?php 
include "db_connect.php";
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "DELETE FROM bookings WHERE no = {$id}";
}
if(isset($_GET['did'])){
    $id = $_GET['did'];
    $sql = "DELETE FROM best_bookings WHERE No = {$id}";
    }
if(mysqli_query($conn,$sql)){
    header("Location: admin_page.php");
}else{
    echo "Can,t delete user record";
}
?>