<?php
include('fetch_name.php');
?>
<html>
<head>
<title> Minimalist Grocer </title>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 

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

.button1 {background-color: darkgreen; 
float: left; height: 40px; width: 40px
font-size: 5px;
text-align: center;
}


</style>

</head>

<body style="background-color:lightgreen">


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
        <a class="nav-link" href="homepage.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about_us.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact_us.php">Contact Us</a>
      </li>
</ul>      
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<li class="nav-item">
        <form action="cart\cart_cart.php">
<button type="submit" class="button button1">Cart </button>
</form>
      </li>
<li class="nav-item">
<a class="nav-link" href="homepage.php"> Wecome <?php echo $name; ?></a>
</li>
    </ul>

    </ul>
  </div>
</nav>




<br><br>


<div class="container">
<div class="row">


<?php  //for fruits ?>


<div class="col-lg-3">
<form action="hc_fruits&vegetables.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/fruit&vege.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Fruits and Vegetables </h5>
    <p class="card-text"> Buy some fresh fruits and vegetables from our store. <br>Get discounts. </p>
    <button type="submit" class="btn btn-info"> Fruits </button>
    <input type="hidden" name="pro_name" value="Apple">
    <input type="hidden" name="pro_price" value="100">
    <input type="hidden" name="address" value="..\hc_fruits&vegetables.php">
  </div>
</div>
</form>
</div>


<div class="col-lg-3">
<form action="hc_milk.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/milk.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Milk  </h5>
    <p class="card-text"> Buy fresh and unadulterated milk from our store.<br> Get discounts. </p>
    <button type="submit" class="btn btn-info"> Milk </button>
    <input type="hidden" name="pro_name" value="Apple">
    <input type="hidden" name="pro_price" value="100">
    <input type="hidden" name="address" value="..\hc_fruits&vegetables.php">
  </div>
</div>
</form>
</div>

<div class="col-lg-3">
<form action="hc_grains.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/grains.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Grains </h5>
    <p class="card-text"> Buy some grains from our store.<br> Get discounts. </p>
    <button type="submit" class="btn btn-info"> Grains </button>
    <input type="hidden" name="pro_name" value="Apple">
    <input type="hidden" name="pro_price" value="100">
    <input type="hidden" name="address" value="..\hc_fruits&vegetables.php">
  </div>
</div>
</form>
</div>


<div class="col-lg-3">
<form action="hc_drinks.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/drinks.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Drinks </h5>
    <p class="card-text"> Buy soft and hard drinks from our store.<br> Get discounts. </p>
    <button type="submit" class="btn btn-info"> Drinks </button>
    <input type="hidden" name="pro_name" value="Apple">
    <input type="hidden" name="pro_price" value="100">
    <input type="hidden" name="address" value="..\hc_fruits&vegetables.php">
  </div>
</div>
</form>
</div>



</body>
</html>