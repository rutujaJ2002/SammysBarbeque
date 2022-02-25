<?php

include "./controller/conn.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sammy's Barbeque</title>

    <!--custom styling link-->
    <link rel="stylesheet" href="./css/style.css">

    <!--font-awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--swiper js cdn-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <!--light gallery cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

</head>
<body>

    <!--header section starts-->
    <section class="header">
        <a href="#" class="logo"><i class="fa fa-spoon"></i>
            Sammy's Barbeque</a>

        <nav class="navbar">
            <a href="./orders.php">Orders</a>
            <a href="./items.php">Food-items</a>
            <a href="#">All-items</a>
            <a href="./controller/logout.php">Logout</a>
        </nav>

        <div id="menu-btn"><i class="fa fa-bars"></i></div>
    </section>
    
    <!--add food item section-->
    <section class="ad-orders" id="ad-orders">
        <div class="table-container">
            <div class="heading">All Food Items</div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Food item</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                        $i=1;
                        $query1 = " SELECT * FROM `breakfast` ";
                        $res = mysqli_query($conn, $query1);
                        while($result = mysqli_fetch_array($res))
                        {
                    ?>
                    <tr>
                        <td data-label="Sr No." class="ids"><?php echo $i; ?></td>
                        <td data-label="Food item"><?php echo $result['bname'];?></td>
                        <td data-label="Price">$<?php echo $result['price'];?></td>
                        <td data-label="Action">
                            <a href="delete.php?bname=<?php echo $result['bname'];?>" class="act-btn">Delete</a>
                        </td>
                    </tr>
                    <?php
                        $i++;
                        }
                    ?>



                    <?php 
                        $j=$i;
                        $query2 = " SELECT * FROM `lunch` ";
                        $res = mysqli_query($conn, $query2);
                        while($result = mysqli_fetch_array($res))
                        {
                    ?>
                    <tr>
                        <td data-label="Sr No." class="ids"><?php echo $j;?></td>
                        <td data-label="Food item"><?php echo $result['lname'];?></td>
                        <td data-label="Price">$<?php echo $result['price'];?></td>
                        <td data-label="Action">
                            <a href="delete.php?lname=<?php echo $result['lname'];?>" class="act-btn">Delete</a>
                        </td>
                    </tr>
                    <?php
                        $j++;
                        }
                    ?>

                    <?php 
                        $k=$j;
                        $query3 = " SELECT * FROM `dinner` ";
                        $res = mysqli_query($conn, $query3);
                        while($result = mysqli_fetch_array($res))
                        {
                    ?>
                    <tr>
                        <td data-label="Sr No." class="ids"><?php echo $k;?></td>
                        <td data-label="Food item"><?php echo $result['dname'];?></td>
                        <td data-label="Price">$<?php echo $result['price'];?></td>
                        <td data-label="Action">
                            <a href="delete.php?dname=<?php echo $result['dname'];?>" class="act-btn">Delete</a>
                        </td>
                    </tr>
                    <?php
                        $k++;
                        }
                    ?>

                    <?php 
                        $l=$k;
                        $query4 = " SELECT * FROM `desserts` ";
                        $res = mysqli_query($conn, $query4);
                        while($result = mysqli_fetch_array($res))
                        {
                    ?>
                    <tr>
                        <td data-label="Sr No." class="ids"><?php echo $l;?></td>
                        <td data-label="Food item"><?php echo $result['dename'];?></td>
                        <td data-label="Price">$<?php echo $result['price'];?></td>
                        <td data-label="Action">
                            <a href="delete.php?dename=<?php echo $result['dename'];?>" class="act-btn">Delete</a>
                        </td>
                    </tr>
                    <?php
                        $l++;
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </section>

    <!--custom js file-->
    <script src="./js/script.js"></script>

</body>
</html>