<?php  include('fetch_name.php'); ?>
<html>
<head>
<title> Minimalist Grocer </title>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.button {
  border: none;
  color: white;
  padding: 8px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: transparent; float: left; height: 30px;}

</style>

</head>

<body style="background-color: lightgreen;">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<!--  
<a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
--!>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php"> Go to Home <span class="sr-only"></span></a>
      </li>

<!--
      <li class="nav-item">
        <a class="nav-link" href="about_us.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact_us.php">Contact Us</a>
      </li>
--!>
<li class="nav-item">
<a class="nav-link" href="hc_fruits&vegetables.php">Go to Fruits&Vegetables </a>
</li>
<li class="nav-item">
<a class="nav-link" href="hc_grains.php">Go to Grains </a>
</li>
<li class="nav-item">
<a class="nav-link" href="hc_drinks.php">Go to Drinks </a>
</li>
</ul>

<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<li class="nav-item">
        <form action="cart\cart_cart.php">
<button type="submit" class="button button1">Cart 
<i class="fa fa-shopping-cart" style="font-size:24px"></i>
</button>
</form>
      </li>
<li class="nav-item">
<a class="nav-link" href="homepage.php"> Wecome <?php echo $name; ?></a>
</li>
<li class="nav-item">
<a class="nav-link" href="truncate_cart.php"> Log Out </a>
</li>
    </ul>
  </div>
</nav>

<br><br>



<div class="container">
<div class="row">



<?php //for dairy products ?>

<div class="col-lg-3">
<form action="cart\cart_add.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/Milk.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Milk </h5>
    <p class="card-text">Price: 60</p>
    <button type="submit" class="btn btn-info"> Add to cart </button>
    <input type="hidden" name="pro_name" value="Milk">
    <input type="hidden" name="pro_price" value="60">
    <input type="hidden" name="address" value="..\hc_milk.php">
  </div>
</div>
</form>
</div>


<div class="col-lg-3">
<form action="cart\cart_add.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/Dahi.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Dahi </h5>
    <p class="card-text">Price: 70</p>
    <button type="submit" class="btn btn-info"> Add to cart </button>
    <input type="hidden" name="pro_name" value="Dahi">
    <input type="hidden" name="pro_price" value="70">
    <input type="hidden" name="address" value="..\hc_milk.php">
  </div>
</div>
</form>
</div>



<div class="col-lg-3">
<form action="cart\cart_add.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/Paneer.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Paneer </h5>
    <p class="card-text">Price: 250</p>
    <button type="submit" class="btn btn-info"> Add to cart </button>
    <input type="hidden" name="pro_name" value="Paneer">
    <input type="hidden" name="pro_price" value="250">
    <input type="hidden" name="address" value="..\hc_milk.php">
  </div>
</div>
</form>
</div>


<div class="col-lg-3">
<form action="cart\cart_add.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/Cheese.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Cheese </h5>
    <p class="card-text">Price: 350</p>
    <button type="submit" class="btn btn-info"> Add to cart </button>
    <input type="hidden" name="pro_name" value="Cheese">
    <input type="hidden" name="pro_price" value="350">
    <input type="hidden" name="address" value="..\hc_milk.php">
  </div>
</div>
</form>
</div>





<div class="col-lg-3">
<form action="cart\cart_add.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/soymilk.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Soy Milk </h5>
    <p class="card-text">Price: 135</p>
    <button type="submit" class="btn btn-info"> Add to cart </button>
    <input type="hidden" name="pro_name" value="Soy Milk">
    <input type="hidden" name="pro_price" value="135">
    <input type="hidden" name="address" value="..\hc_milk.php">
  </div>
</div>
</form>
</div>


<div class="col-lg-3">
<form action="cart\cart_add.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/peda.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Milk Peda </h5>
    <p class="card-text">Price: 450</p>
    <button type="submit" class="btn btn-info"> Add to cart </button>
    <input type="hidden" name="pro_name" value="Milk Peda">
    <input type="hidden" name="pro_price" value="450">
    <input type="hidden" name="address" value="..\hc_milk.php">
  </div>
</div>
</form>
</div>



<div class="col-lg-3">
<form action="cart\cart_add.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/Custard.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Custard </h5>
    <p class="card-text">Price: 190</p>
    <button type="submit" class="btn btn-info"> Add to cart </button>
    <input type="hidden" name="pro_name" value="Custard">
    <input type="hidden" name="pro_price" value="190">
    <input type="hidden" name="address" value="..\hc_milk.php">
  </div>
</div>
</form>
</div>


<div class="col-lg-3">
<form action="cart\cart_add.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/icecream.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Ice Cream </h5>
    <p class="card-text">Price: 200</p>
    <button type="submit" class="btn btn-info"> Add to cart </button>
    <input type="hidden" name="pro_name" value="Ice Cream">
    <input type="hidden" name="pro_price" value="200">
    <input type="hidden" name="address" value="..\hc_milk.php">
  </div>
</div>
</form>
</div>


</div>
</div>

</body>
</html>