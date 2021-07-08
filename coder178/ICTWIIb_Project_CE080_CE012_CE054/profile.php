<?php
session_start();
if (!isset($_SESSION['username'])) {
        header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <script src="https://kit.fontawesome.com/c628238ccd.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/style6.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
        <title>Admin Page</title>
</head>

<body>
        <header>
                <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        </header>
        <div id="admin-content">

                <div class="heading">
                        <h1>List of your bookings :</h1>
                </div>
                <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                        <tr>
                                <td style="width: 50px;">SRNO:</td>
                                <td style="width: 400px;">PACKAGE:</td>
                                <td style="width: 70px;">COST:</td>
                                <td>DATE:</td>
                        </tr>
                </table>
                <?php

                include "db_connect.php";
                $uid = $_SESSION['userid'];

                $sql = "SELECT b.no,b.date,p.package,p.cost FROM bookings b INNER JOIN users u ON b.userid = u.user_id INNER JOIN packages p ON b.pid = p.SrNo WHERE u.user_id=$uid";
                $result = mysqli_query($conn, $sql) or die("Query failed");
                if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                <div class="content table">
                                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">

                                                <tr>
                                                        <td style="width: 50px;">
                                                                <?php echo $row['no']; ?>
                                                        </td>
                                                        <td style="width: 400px;">
                                                                <?php echo $row['package']; ?>
                                                        </td>
                                                        <td style="width: 70px;">
                                                                <?php echo $row['cost']; ?>
                                                        </td>
                                                        <td>
                                                                <?php echo $row['date']; ?>
                                                        </td>


                                                </tr>
                                        </table>



                                </div>
                        <?php } ?>

                <?php  } ?>



        </div>
        <div class="heading">
                <h1>List of best bookings :</h1>
        </div>
        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                <tr>
                        <td style="width: 50px;">SRNO:</td>
                        <td style="width: 300px;">PACKAGE:</td>
                        <td style="width: 70px;">COST:</td>
                        <td>DATE:</td>
                </tr>
        </table>
        <?php


        $sql = "SELECT b.No,b.date,d.pname,d.pcost FROM best_bookings b INNER JOIN users u ON b.uid = u.user_id INNER JOIN best d ON b.bid = d.id WHERE u.user_id=$uid";
        $result = mysqli_query($conn, $sql) or die("Query failed");
        if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="content table">
                                <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">

                                        <tr>
                                                <td style="width: 50px;">
                                                        <?php echo $row['No']; ?>
                                                </td>
                                                <td style="width: 300px;">
                                                        <?php echo $row['pname']; ?>
                                                </td>
                                                <td style="width: 70px;">
                                                        <?php echo $row['pcost']; ?>
                                                        </td">
                                                <td>
                                                        <?php echo $row['date']; ?>
                                                </td>

                                        </tr>
                                </table>


                        </div>

                <?php } ?>
        <?php  } ?>
        <section class="home">
        <a href="home.php"><button class="btn-home">
               Back to Home
            </button></a>
    </section>
</body>

</html>