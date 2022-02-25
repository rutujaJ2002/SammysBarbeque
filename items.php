
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
            <a href="#">Food-items</a>
            <a href="./allitems.php">All-items</a>
            <a href="./controller/logout.php">Logout</a>
        </nav>

        <div id="menu-btn"><i class="fa fa-bars"></i></div>
    </section>
    
    <!--add food item section-->
    <section class="item" id="item">
        <form action="./controller/additems.php" method="POST">
            <div class="box-container">
                <div class="box">
                    <div class="inputBox">
                        <span>Food Item Name:</span><br>
                        <input type="text" name="fname"  placeholder="Food Item Name" required>
                    </div>
                    <div class="inputBox">
                        <span>food item category:</span><br>
                        <input type="text" name="fcat" list="items" placeholder="Category" required>
                        <datalist id="items">
                            <option value="Breakfast">Breakfast</option>
                            <option value="Lunch">Lunch</option>
                            <option value="Dinner">Dinner</option>
                            <option value="Dessert">Dessert</option>
                        </datalist>
                    </div>
                    
                    <div class="inputBox">
                        <span>food item description:</span><br>
                        <textarea name="fdescription" cols="30" rows="5" placeholder="About food dish" required> </textarea>
                    </div>
                    <div class="inputBox">
                        <span>food item price:</span><br>
                        <input type="number" name="fprice" list="items" placeholder="Food Item Price" required>
                    </div>
                </div>
            </div>
            <button class="btn" value="Add Item" name="add">Add Item</button>
        </form>
    </section>

    <!--custom js file-->
    <script src="./js/script.js"></script>

</body>
</html>
