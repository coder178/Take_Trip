<?php 
include "db_connect.php";

$id = $_GET['id'];
$sql = "DELETE FROM queries WHERE id = {$id}";
if(mysqli_query($conn,$sql)){
    header("Location: admin_page.php");
}
?>