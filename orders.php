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
            <a href="#">Orders</a>
            <a href="./items.php">Food-items</a>
            <a href="./allitems.php">All-items</a>
            <a href="./controller/logout.php">Logout</a>
        </nav>

        <div id="menu-btn"><i class="fa fa-bars"></i></div>
    </section>
    
    <!--add food item section-->
    <section class="ad-orders" id="ad-orders">
        <div class="table-container">
            <div class="heading">All orders</div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Order No.</th>
                        <th>full name</th>
                        <th>food name</th>
                        <th>address</th>
                        <th>phone</th>
                        <th>quantity</th>
                    </tr>
                </thead>
                <tbody>
                  <?php

                  $i=1;
                  $query1 = " SELECT `name`, `food`, `address`, `phone`, `quantity` FROM `orders` ";
                  $res = mysqli_query($conn, $query1);
                  while($result = mysqli_fetch_array($res))
                  {
                  ?>
                    <tr>
                        <td data-label="Sr.No." class="ids"><?php echo $i;?></td>
                        <td data-label="full name"><?php echo $result['name'];?></td>
                        <td data-label="food name"><?php echo $result['food'];?></td>
                        <td data-label="address"><?php echo $result['address'];?></td>
                        <td data-label="phone"><?php echo $result['phone'];?></td>
                        <td data-label="quantity"><?php echo $result['quantity'];?></td>
                    </tr>
                    <?php
                    $i++;
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