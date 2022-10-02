<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form</title>
    <style>
    .carousel-item img{
        height:550px;
    }


    </style>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
          <a class="dropdown-item" href="#architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">Travel</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about-us">About us</a>
      </li>
    </ul>
   
  </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/n.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/tr.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/n2.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<a id="nature">
<section class="my-4">
<div class="py-4">
    <h2 class="text-center">
NATURE
    </h2>

</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-12"><img src="images/n1.jpg" class="img-fluid " alt=""></div>
    <div class="col-lg-4 col-md-4 col-12"><img src="images/tr3.jpg" class="img-fluid " alt=""></div>
    <div class="col-lg-4 col-md-4 col-12"><img src="images/tr1.jpg" class="img-fluid " alt=""></div>



    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/n.jpg" class="img-fluid" alt=""></div>



    <div class="col-lg-4 col-md-4 col-12"><img src="images/tr.jpg" class="img-fluid " alt=""></div>
</div>
</section>
</a>
<a id="architecture">
<section class="my-4">
<div class="py-4">
    <h2 class="text-center">
ARCHITECTURE
    </h2>

</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-12"><img src="images/n1.jpg" class="img-fluid " alt=""></div>
    <div class="col-lg-4 col-md-4 col-12"><img src="images/tr3.jpg" class="img-fluid " alt=""></div>
    <div class="col-lg-4 col-md-4 col-12"><img src="images/tr1.jpg" class="img-fluid " alt=""></div>



    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/n.jpg" class="img-fluid" alt=""></div>



    <div class="col-lg-4 col-md-4 col-12"><img src="images/tr.jpg" class="img-fluid " alt=""></div>
</div>
</section>
</a>
<a id="travel">
<section class="my-4">
<div class="py-4">
    <h2 class="text-center">
TRAVEL
    </h2>

</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-12"><img src="images/n1.jpg" class="img-fluid " alt=""></div>
    <div class="col-lg-4 col-md-4 col-12"><img src="images/tr3.jpg" class="img-fluid " alt=""></div>
    <div class="col-lg-4 col-md-4 col-12"><img src="images/tr1.jpg" class="img-fluid " alt=""></div>



    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/n.jpg" class="img-fluid" alt=""></div>



    <div class="col-lg-4 col-md-4 col-12"><img src="images/tr.jpg" class="img-fluid " alt=""></div>
</div>
</section>
</a>
<a id="about-us">
<section class="my-4">
<div class="py-4">
    <h2 class="text-center">
About us
    </h2>

</div>
<div class="container-fluid">
<h3 class="text-center">INES </h3>
<p class="text-center"> just know yourself</p>
</div>
</div>
</section>























    <div class="w-50 m-auto">
        <form action="index.php" method="POST">
    <label>user name</label>
    <input type="text" name="username" class="form-control" required>
    <br><br>
    <label>password</label>
    <input type="password" name="password" class="form-control" required>
    <br><br>
    <label>confirm</label>
    <input type="password" name="cpassword" class="form-control" required>
    <br><br>
    <label>email</label>
    <input type="email" name="email" class="form-control" required>
    <br><br>
    <input type="submit" value="submit" name="submit" class="bt btn-success">
        </form>
    </div>
    </a>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>