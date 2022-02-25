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

    <!--siper js cdn-->
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
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#food">food</a>
            <a href="#gallery">gallery</a>
            <a href="#menu">menu</a>
            <a href="#order">order</a>
            <a href="./login.php">Admin</a>
        </nav>

        <div id="menu-btn"><i class="fa fa-bars"></i></div>
    </section>
    

    <!--home section-->
    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(./images/home-slide-2.jpg) no-repeat;">
                    <div class="content">
                        <span>Delicious food</span>
                        <h3>delicious cooking</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/home-slide-1.jpg) no-repeat;">
                    <div class="content">
                        <span>Delicious food</span>
                        <h3>morning moment</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/home-slide-3.jpg) no-repeat;">
                    <div class="content">
                        <span>Delicious food</span>
                        <h3>authentic kitchen</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!--about section starts-->
    <section class="about" id="about">
        <div class="image">
            <img src="./images/about-img.png" alt="">
        </div>

        <div class="content">
            <h3 class="title">Welcome to our Restaurant</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Tempore commodi obcaecati consequatur tenetur doloremque? 
                Doloribus enim quaerat veritatis tempore molestias!</p>
            <a href="#" class="btn">Read More</a>
            <div class="icons-container">
                <div class="icons">
                    <img src="./images/about-icon-1.png" alt="">
                    <h3>quality food</h3>
                </div>

                <div class="icons">
                    <img src="./images/about-icon-2.png" alt="">
                    <h3>food & drinks</h3>
                </div>

                <div class="icons">
                    <img src="./images/about-icon-3.png" alt="">
                    <h3>expert chef</h3>
                </div>
            </div>
        </div>
    </section>


    <!--food section starts-->
    <section class="food" id="food">
        <div class="heading">
            <span>popular dishes</span>
            <h3>our delicious dishes</h3>
        </div>

        <div class="swiper food-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" data-name="food-1">
                    <img src="./images/food-img-1.png" alt="">
                    <h3>delicious salad</h3>
                    <div class="price">$40.0</div>
                </div>

                <div class="swiper-slide slide" data-name="food-2">
                    <img src="./images/food-img-2.png" alt="">
                    <h3>grilled salad</h3>
                    <div class="price">$45.0</div>
                </div>

                <div class="swiper-slide slide" data-name="food-3">
                    <img src="./images/food-img-3.png" alt="">
                    <h3>spicy chicken 65</h3>
                    <div class="price">$42.0</div>
                </div>

                <div class="swiper-slide slide" data-name="food-4">
                    <img src="./images/food-img-4.png" alt="">
                    <h3>veggies choppsie</h3>
                    <div class="price">$37.0</div>
                </div>

                <div class="swiper-slide slide" data-name="food-5">
                    <img src="./images/food-img-5.png" alt="">
                    <h3>Tasty potato frankies</h3>
                    <div class="price">$40.0</div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--food preview section starts-->
    <section class="food-preview-container">

        <div id="close-preview" class="fa fa-times"></div>

        <div class="food-preview" data-target="food-1">
            <img src="./images/food-img-1.png" alt="">
            <h3>delicious salad</h3>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Nihil sit dolorum dicta reprehenderit</p>
                <div class="price">$40.0</div>
                <a href="#" class="btn">Order Now</a>
        </div>

        <div class="food-preview" data-target="food-2">
            <img src="./images/food-img-2.png" alt="">
            <h3>grilled salad</h3>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Nihil sit dolorum dicta reprehenderit</p>
                <div class="price">$45.0</div>
                <a href="#" class="btn">Order Now</a>
        </div>

        <div class="food-preview" data-target="food-3">
            <img src="./images/food-img-3.png" alt="">
            <h3>spicy chicken 65</h3>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Nihil sit dolorum dicta reprehenderit</p>
                <div class="price">$42.0</div>
                <a href="#" class="btn">Order Now</a>
        </div>

        <div class="food-preview" data-target="food-4">
            <img src="./images/food-img-4.png" alt="">
            <h3>veggies choppsie</h3>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Nihil sit dolorum dicta reprehenderit</p>
                <div class="price">$37.0</div>
                <a href="#" class="btn">Order Now</a>
        </div>

        <div class="food-preview" data-target="food-5">
            <img src="./images/food-img-5.png" alt="">
            <h3>Tasty potato frankies</h3>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Nihil sit dolorum dicta reprehenderit</p>
                <div class="price">$40.0</div>
                <a href="#" class="btn">Order Now</a>
        </div>
    </section>


    <!--gallery section starts-->
    <section class="gallery" id="gallery">
        <div class="heading">
            <span>Our Gallery</span>
            <h3> Our special dishes</h3>
        </div>

        <div class="gallery-container">
            <a href="./images/food-galler-img-1.jpg" class="box">
                <img src="./images/food-galler-img-1.jpg" alt="">
                <div class="icon"><i class="fa fa-plus"></i></div>
            </a>

            <a href="./images/.food-galler-img-6.jpg" class="box">
                <img src="./images/food-galler-img-6.jpg" alt="">
                <div class="icon"><i class="fa fa-plus"></i></div>
            </a>

            <a href="./images/food-galler-img-2.jpg" class="box">
                <img src="./images/food-galler-img-2.jpg" alt="">
                <div class="icon"><i class="fa fa-plus"></i></div>
            </a>

            <a href="./images/food-galler-img-4.jpg" class="box">
                <img src="./images/food-galler-img-4.jpg" alt="">
                <div class="icon"><i class="fa fa-plus"></i></div>
            </a>

            <a href="./images/food-galler-img-3.jpg" class="box">
                <img src="./images/food-galler-img-3.jpg" alt="">
                <div class="icon"><i class="fa fa-plus"></i></div>
            </a>

            <a href="./images/food-galler-img-5.jpg" class="box">
                <img src="./images/food-galler-img-5.jpg" alt="">
                <div class="icon"><i class="fa fa-plus"></i></div>
            </a>
        </div>
    </section>


    <!--menu setcion starts-->
    <section class="menu" id="menu">
        <div class="heading">
            <span>our menu</span>
            <h3>our special dishes</h3>
        </div>

        <div class="swiper menu-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <h3 class="title">Breakfast</h3>
                    <div class="box-container">

                    <?php
                    $breakfast_query = " SELECT * FROM `breakfast`";
                    $res_query = mysqli_query($conn, $breakfast_query);
                    while($res= mysqli_fetch_array($res_query))
                    {
                    ?>
                        <div class="box">
                            <div class="info">
                                <h3><?php echo $res['bname']; ?></h3>
                                <p><?php echo $res['description'];?></p>
                            </div>
                            <div class="price">
                                $<?php echo $res['price'];?>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">lunch</h3>
                    <div class="box-container">

                    <?php
                    $lunch_query = " SELECT * FROM `lunch`";
                    $res_query = mysqli_query($conn, $lunch_query);
                    while($res= mysqli_fetch_array($res_query))
                    {
                    ?>
                        <div class="box">
                            <div class="info">
                                <h3><?php echo $res['lname']; ?></h3>
                                <p><?php echo $res['description'];?></p>
                            </div>
                            <div class="price">
                                $<?php echo $res['price'];?>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">dinner</h3>
                    <div class="box-container">

                    <?php
                    $dinner_query = " SELECT * FROM `dinner`";
                    $res_query = mysqli_query($conn, $dinner_query);
                    while($res= mysqli_fetch_array($res_query))
                    {
                    ?>
                        <div class="box">
                            <div class="info">
                                <h3><?php echo $res['dname']; ?></h3>
                                <p><?php echo $res['description'];?></p>
                            </div>
                            <div class="price">
                                $<?php echo $res['price'];?>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">drinks & desserts</h3>
                    <div class="box-container">

                    <?php
                    $dessert_query = " SELECT * FROM `desserts`";
                    $res_query = mysqli_query($conn, $dessert_query);
                    while($res= mysqli_fetch_array($res_query))
                    {
                    ?>
                        <div class="box">
                            <div class="info">
                                <h3><?php echo $res['dename']; ?></h3>
                                <p><?php echo $res['description'];?></p>
                            </div>
                            <div class="price">
                                $<?php echo $res['price'];?>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--order section starts-->
    <section class="order" id="order">
        <div class="heading">
            <span>order now</span>
            <h3>fast home delivery</h3>
        </div>
        <form action="./controller/order.php" method="POST">
            <div class="box-container">
                <div class="box">
                    <div class="inputBox">
                        <span>full name:</span>
                        <input type="text" name="name"  placeholder="Enter Your Name" required>
                    </div>
                    <div class="inputBox">
                        <span>food name:</span>
                        <input type="text" name="food" list="items" placeholder="Enter food name that you want to order..." required>
                    </div>
                    
                    <div class="inputBox">
                        <span>Your address:</span>
                        <textarea name="address" cols="30" rows="10" placeholder="Your address" required> </textarea>
                    </div>
                </div>

                <div class="box">
                    <div class="inputBox">
                        <span>mobile number:</span>
                        <input type="number" name="phone" placeholder="Enter Your Number" required>
                    </div>
                    <div class="inputBox">
                        <span>Quantity of dishes:</span>
                        <input type="text" name="quantity"  placeholder="How many you want?" required>
                    </div>
                    <div class="inputBox">
                        <span>Our address:</span><br>
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15205.099089037738!2d74.00602922597783!3d17.684475306417863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc239be3d0d5e49%3A0xc5bac426de3be019!2sPowai%20Naka%2C%20Satara%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1645460027264!5m2!1sen!2sin" 
                        ></iframe>
                    </div>
                </div>
            </div>
            <button class="btn" value="Order" name="order">Order Now</button>
        </form>
    </section>

    <!--footer section starts-->
    <section class="footer" id="footer">
        <div class="icons-container">
            <div class="icons">
                <i class="fa fa-clock-o"></i>
                <h3>opening hours:</h3>
                <p>8:00am to 11:00pm</p>
            </div>

            <div class="icons">
                <i class="fa fa-phone"></i>
                <h3>Call us:</h3>
                <p>+123-456-7890</p>
                <p>+111-666-3333</p>
                </p>
            </div>

            <div class="icons">
                <i class="fa fa-envelope"></i>
                <h3>email us:</h3>
                <p>rutujasamiksha123@gmail.com</p>
            </div>

            <div class="icons">
                <i class="fa fa-map"></i>
                <h3>Visit us:</h3>
                <p>Powai Naka, Satara, India-415 501</p>
            </div>
        </div>
        <div class="share">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
        </div>

        <div class="credit">
            created by: <span>Rutuja Jadhav</span> | All rights reserved
        </div>
    </section>

    
    <!--swiper js cdn-->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!--light gallery js cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <!--custom js file-->
    <script src="./js/script.js"></script>
</body>
</html>