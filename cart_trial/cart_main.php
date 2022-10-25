<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #008CBA; float: left} /* Blue */
</style>

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

<form action="cart_cart.php">
<button type="submit" class="button button1"> Cart </button>
</form>



<div class="container">
<div class="row">


<div class="col-lg-3">
<form action="cart_add.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/apple3.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Apple </h5>
    <p class="card-text">Price: 100</p>
    <button type="submit" class="btn btn-info"> Add to cart </button>
    <input type="hidden" name="pro_name" value="Apple">
    <input type="hidden" name="pro_price" value="100">
  </div>
</div>
</form>
</div>


<div class="col-lg-3">
<form action="cart_add.php" method="POST">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/banana.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Banana </h5>
    <p class="card-text">Price: 80</p>
    <button type="submit" class="btn btn-info"> Add to cart </button>
    <input type="hidden" name="pro_name" value="Banana">
    <input type="hidden" name="pro_price" value="80">
  </div>
</div>
</form>
</div>



<div class="col-lg-3">
<form>
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/orange1.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Orange </h5>
    <p class="card-text">Price: 90</p>
    <button type="submit" class="btn btn-info"> Add to cart </button>
    <input type="hidden" name="item_name" value="Orange">
    <input type="hidden" name="item_price" value="90">
  </div>
</div>
</form>
</div>


<div class="col-lg-3">
<form>
<div class="card" style="width: 15rem;">
  <img class="card-img-top" src="images/strawberry.jpg" alt="Card image cap" width="500" height="150">
  <div class="card-body text-center">
  <h5 class"card-title text-center"> Strawberry </h5>
    <p class="card-text">Price: 120</p>
    <button type="submit" class="btn btn-info"> Add to cart </button>
    <input type="hidden" name="item_name" value="Strawberry">
    <input type="hidden" name="item_price" value="120">
  </div>
</div>
</form>
</div>





</div>
</div>



</body>
</html>