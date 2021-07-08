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
        <h1>Welcome Admin</h1>
    </header>
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h1>List of all the registered users :</h1>
                </div>
                <div class="TABLE">
                    <?php
                    include "db_connect.php";
                    $sql = "select * from users order by user_id desc";
                    $result = mysqli_query($conn, $sql) or die("Query failed");
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                            <thead style="color: black;">
                                <tr>
                                    <th style="font-size: 20px;">USER_ID</th>
                                    <th style="font-size: 20px;">USERNAME</th>
                                    <th style="font-size: 20px;">EMAIL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td class="id"><?php echo $row['user_id']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
    <section>
        <a href="add.php"><button class="btn">
                Add package

            </button></a>
    </section>
    <div class="heading">
        <h1>List of all the tour packages available :</h1>
    </div>
    <h1>jammu kashmir</h1>
    <?php

    include "db_connect.php";

    $sql = "SELECT * FROM `packages` WHERE st_id=1";
    $result = mysqli_query($conn, $sql) or die("Query failed");
    if (mysqli_num_rows($result) > 0) {
        
     while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="boxcards">
                <div class="box">
                    <div class="content table">

                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                            <tbody>
                                <tr>
                                    <td style="width: 30px;"><?php echo $row['SrNo']; ?></td>
                                    <td style="width: 480px;"><?php echo $row['package']; ?></td>
                                    <td><a href="view.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">View</button></a></td>
                                    
                                    <td><a href="modify.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Modify</button></a></td>
                                    <td><a href="delete.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Delete</button></a></td>
                                    
                                    


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php  } ?>
<h1>Gujarat</h1>
<?php

    include "db_connect.php";

    $sql = "SELECT * FROM `packages` WHERE st_id=2";
    $result = mysqli_query($conn, $sql) or die("Query failed");
    if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="boxcards">
                <div class="box">
                    <div class="content table">

                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                            <tbody>
                                <tr>
                                    <td style="width: 30px;"><?php echo $row['SrNo']; ?></td>
                                    <td style="width: 480px;"><?php echo $row['package']; ?></td>
                                    <td><a href="view.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">View</button></a></td>
                                    
                                    <td><a href="modify.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Modify</button></a></td>
                                    <td><a href="delete.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Delete</button></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php  } ?>
    <h1>Kerala</h1>
    <?php

    include "db_connect.php";

    $sql = "SELECT * FROM `packages` WHERE st_id=3";
    $result = mysqli_query($conn, $sql) or die("Query failed");
    if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="boxcards">
                <div class="box">
                    <div class="content table">

                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                            <tbody>
                                <tr>
                                    <td style="width: 30px;"><?php echo $row['SrNo']; ?></td>
                                    <td style="width: 480px;"><?php echo $row['package']; ?></td>
                                    <td><a href="view.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">View</button></a></td>
                                    
                                    <td><a href="modify.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Modify</button></a></td>
                                    <td><a href="delete.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Delete</button></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php  } ?>
    <h1>Himachal Pradesh</h1>
    <?php

    include "db_connect.php";

    $sql = "SELECT * FROM `packages` WHERE st_id=4";
    $result = mysqli_query($conn, $sql) or die("Query failed");
    if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="boxcards">
                <div class="box">
                    <div class="content table">

                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                            <tbody>
                                <tr>
                                    <td style="width: 30px;"><?php echo $row['SrNo']; ?></td>
                                    <td style="width: 480px;"><?php echo $row['package']; ?></td>
                                    <td><a href="view.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">View</button></a></td>
                                    
                                    <td><a href="modify.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Modify</button></a></td>
                                    <td><a href="delete.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Delete</button></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php  } ?>
    <h1>Delhi</h1>
    <?php

    include "db_connect.php";

    $sql = "SELECT * FROM `packages` WHERE st_id=5";
    $result = mysqli_query($conn, $sql) or die("Query failed");
    if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="boxcards">
                <div class="box">
                    <div class="content table">

                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                            <tbody>
                                <tr>
                                    <td style="width: 30px;"><?php echo $row['SrNo']; ?></td>
                                    <td style="width: 480px;"><?php echo $row['package']; ?></td>
                                    <td><a href="view.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">View</button></a></td>
                                    
                                    <td><a href="modify.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Modify</button></a></td>
                                    <td><a href="delete.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Delete</button></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php  } ?>
    <h1>Maharashtra</h1>
    <?php

    include "db_connect.php";

    $sql = "SELECT * FROM `packages` WHERE st_id=6";
    $result = mysqli_query($conn, $sql) or die("Query failed");
    if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="boxcards">
                <div class="box">
                    <div class="content table">

                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                            <tbody>
                                <tr>
                                    <td style="width: 30px;"><?php echo $row['SrNo']; ?></td>
                                    <td style="width: 480px;"><?php echo $row['package']; ?></td>
                                    <td><a href="view.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">View</button></a></td>
                                    
                                    <td><a href="modify.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Modify</button></a></td>
                                    <td><a href="delete.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Delete</button></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php  } ?>
    <h1>Rajasthan</h1>
    <?php

    include "db_connect.php";

    $sql = "SELECT * FROM `packages` WHERE st_id=7";
    $result = mysqli_query($conn, $sql) or die("Query failed");
    if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="boxcards">
                <div class="box">
                    <div class="content table">

                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                            <tbody>
                                <tr>
                                    <td style="width: 30px;"><?php echo $row['SrNo']; ?></td>
                                    <td style="width: 480px;"><?php echo $row['package']; ?></td>
                                    <td><a href="view.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">View</button></a></td>
                                    
                                    <td><a href="modify.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Modify</button></a></td>
                                    <td><a href="delete.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Delete</button></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php  } ?>
    <h1>Uttar Pradesh</h1>
    <?php

    include "db_connect.php";

    $sql = "SELECT * FROM `packages` WHERE st_id=8";
    $result = mysqli_query($conn, $sql) or die("Query failed");
    if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="boxcards">
                <div class="box">
                    <div class="content table">

                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                            <tbody>
                                <tr>
                                    <td style="width: 30px;"><?php echo $row['SrNo']; ?></td>
                                    <td style="width: 480px;"><?php echo $row['package']; ?></td>
                                    <td><a href="view.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">View</button></a></td>
                                    
                                    <td><a href="modify.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Modify</button></a></td>
                                    <td><a href="delete.php?id=<?php echo $row['SrNo']; ?>"><button class="btn">Delete</button></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php  } ?>
    </div>
    <div class="heading">
        <h1>List of Best Deal packages available :</h1>
    </div>
   
    <?php

    include "db_connect.php";

    $sql = "SELECT * FROM `best`";
    $result = mysqli_query($conn, $sql) or die("Query failed");
    if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="boxcards">
                <div class="box">
                    <div class="content table">

                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                            <tbody>
                                <tr>
                                    <td style="width: 30px;"><?php echo $row['id']; ?></td>
                                    <td style="width: 480px;"><?php echo $row['pname']; ?></td>
                                    <td><a href="view.php?did=<?php echo $row['id']; ?>"><button class="btn">View</button></a></td>
                                    
                                    <td><a href="modify.php?bid=<?php echo $row['id']; ?>"><button class="btn">Modify</button></a></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php  } ?>
    <div class="queries">
        <div class="heading">
            <h1>Queries received :</h1>
        </div>
        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
            <tr>
                <td style="width: 70px;">USER</td>
                <td style="width: 300px;">EMAIL</td>
                <td style="width: 150px;">CONTACT</td>
                <td>QUERY</td>
                <td>STATUS</td>
            </tr>
        </table>
        <?php

        include "db_connect.php";

        $sql = "SELECT * FROM `queries`";
        $result = mysqli_query($conn, $sql) or die("Query failed");
        if (mysqli_num_rows($result) > 0) {
        ?>

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                <div class="content table">
                    <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">

                        <tr>
                            <td style="width: 70px;">
                                <?php echo $row['username']; ?>
                            </td>
                            <td style="width: 300px;">
                                <?php echo $row['email']; ?>
                            </td>
                            <td style="width: 150px;">
                                <?php echo $row['contact']; ?>
                            </td>
                            <td><?php echo $row['message']; ?>
                            </td>
                            <td><a href="resolve.php?id=<?php echo $row['id']; ?>"><button class="btn">resolved</button></a></td>
                                   
                        </tr>
                    </table>
                </div>

            <?php } ?>
        <?php  } ?>
    </div>
    <section>
        <div class="bookings">
       
            <div class="heading">
                <h1> Package Bookings</h1>
            </div>
            <?php
            include "db_connect.php";

            $sql = "SELECT b.no,b.date,u.username,p.package FROM bookings b INNER JOIN users u ON b.userid = u.user_id INNER JOIN packages p ON b.pid = p.SrNo";
            $result = mysqli_query($conn, $sql) or die("Query failed");
            if (mysqli_num_rows($result) > 0) {
            ?>
           <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">

<tr>
    <td style="width: 10px;">
        NO
    </td>
    <td style="width: 100px;">
        USERNAME
    </td>
    <td style="width: 250px;">
    PACKAGE
    <td>Date of Booking
    </td>
    <td>Cancelation</td>
</tr>
            </table>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="content table">
                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">

                            <tr>
                                <td style="width: 10px;">
                                    <?php echo $row['no']; ?>
                                </td>
                                <td style="width: 100px;">
                                    <?php echo $row['username']; ?>
                                </td>
                                <td style="width: 250px;">
                                    <?php echo $row['package']; ?>
                                </td style="width: 100px;">
                                <td><?php echo $row['date']; ?>
                                </td>
                                <td><a href="cancel.php?id=<?php echo $row['no']; ?>"><button class="btn">cancel</button></a></td>
                            </tr>
                        </table>



                    </div>

                <?php } ?>
            <?php  } ?>
        </div>
        <div class="bookings">
            <div class="heading">
                <h1>Deal Bookings</h1>
            </div>
            <?php
            include "db_connect.php";

            $sql = "SELECT b.No,b.date,u.username,d.pname FROM best_bookings b INNER JOIN users u ON b.uid = u.user_id INNER JOIN best d ON b.bid = d.id";
            $result = mysqli_query($conn, $sql) or die("Query failed");
            if (mysqli_num_rows($result) > 0) {
                $num=1;
            ?>

                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="content table">
                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">

                            <tr>
                                <td style="width: 10px;">
                                    <?php echo $num; ?>
                                </td>
                                <td style="width: 100px;">
                                    <?php echo $row['username']; ?>
                                </td>
                                <td style="width: 250px;">
                                    <?php echo $row['pname']; ?>
                                </td style="width: 100px;">
                                <td><?php echo $row['date']; ?>
                                </td>
                                <td><a href="cancel.php?did=<?php echo $row['No']; ?>"><button class="btn">cancel</button></a></td>
                            </tr>
                            <?php  $num+1;?>
                        </table>
                    </div>

                <?php } ?>
            <?php  } ?>
        </div>
    </section>
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h1>List of feedbacks</h1>
                </div>
                <div class="TABLE">
                    <?php
                    include "db_connect.php";
                    $sql = "select * from feedbacks";
                    $result = mysqli_query($conn, $sql) or die("Query failed");
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                            <thead style="color: black;">
                                <tr>
                                    <th style="font-size: 20px;">No</th>
                                    <th style="font-size: 20px;">NAME</th>
                                    <th style="font-size: 20px;">EMAIL</th>
                                    <th style="font-size: 20px;">contact</th>
                                    <th style="font-size: 20px;">feedback</th>
                                    <th style="font-size: 20px;">suggestions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td class="id"><?php echo $row['no']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['feedback']; ?></td>
                                        <td><?php echo $row['suggestions']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
    <section class="home">
        <a href="index.php"><button class="btn-home">
               Back to Home
            </button></a>
    </section>
   
</body>

</html>