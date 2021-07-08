<?php 
include "db_connect.php";

$id = $_GET['id'];
$sql = "DELETE FROM packages WHERE SrNo = {$id}";

if(mysqli_query($conn,$sql)){
    header("Location: admin_page.php");
}else{
    echo "Can,t delete user record";
}
?>