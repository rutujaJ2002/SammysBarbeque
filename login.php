<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-login-SammysBarbeque</title>

    <!--bootstrap link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <!--font-awesome cdn-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <a href="./index.php" class="float-left log-btn" >
        <i class="fa fa-mail-reply"></i>Home
    </a>

    <div class="row no-gutters d-flex justify-content-center">
        <div class="col-md-6">
            <div class="left-side">
                <img src="./images/about-img.png" class="img-responsive log-img" alt="login-image">
            </div>
        </div>

        <div class="col-md-6">
            <div class="right-side d-flex justify-content-center align-items-center fixed"
            style="background: url(./images/about-img.png) no-repeat;">
                <form action="./controller/login.php" method="POST">
                    <h1 class="big-text">Login here</h1>
                    <div class="form-group">
                      <input type="text" class="form-control in-box" placeholder="Username" name="username" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control in-box" placeholder="Password" name="password" required autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                    <br><br>

                  </form>
            </div>
        </div>
    </div>
</body>
</html>