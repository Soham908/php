<html>
<head>
<title> Minimalist Grocer </title>

 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
    <link rel = "stylesheet" type = "text/css" href = "style.css">

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

.button1 {background-color: transparent; float: left; height: 30px; color: white; border: 5px;}

.color
{
background-color: lightblue;
}

.opa
{
opacity: 0.5;
}
.sen
{
color: lightgrey;
}
.sen
{
color: lightblue;
}
.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;


/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}

</style>

</head>
<body style="background-color: lightgreen;">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="..\homepage.php"> Go to Home <span class="sr-only"></span></a>
      </li>


<li class="nav-item">
<a class="nav-link" href="..\hc_fruits&vegetables.php">Go to Fruits&Vegetables </a>
</li>
<li class="nav-item">
<a class="nav-link" href="..\hc_milk.php">Go to Milk </a>
</li>
<li class="nav-item">
<a class="nav-link" href="..\hc_grains.php">Go to Grains </a>
</li>
<li class="nav-item">
<a class="nav-link" href="..\hc_drinks.php">Go to Drinks </a>
</li>
</ul>

<ul class="navbar-nav ms-auto mb-2 mb-lg-0">

<li class="nav-item">
        <form action="cart_cart.php">
<button type="submit" class="button button1">Cart 
<i class="fa fa-shopping-cart" style="font-size:24px"></i>
</button>
</form>
      </li>

<li class="nav-item">
<a class="nav-link" href="..\truncate_cart.php"> Log Out </a>
</li>
    </ul>
  </div>
</nav>



  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
<h3 class="sen" > Checkout Page </h3>
<br>



              <p class="sen"> Please enter your details </p>
<br><br>

<div id="frm">

<form name="f1" action="..\order_placed.php" method="POST" class="sen">
 <p class="sen">
 <label> Address: </label>
 <input class="opa" type="text" name="user" required>
 </p>
<br>

  <p class="sen">

<label> Payment Method:</label>

  <input type="radio" id="r1" name="r1" value="cash">
  <label for="r1"> Cash </label>
  <input type="radio" id="r2" name="r1" value="card">
  <label for="r2"> Card </label>
  <input type="radio" id="r3" name="r1" value="bitcoin">
  <label for="r3"> Bitcoin </label>


 </p>

<br><br>
 <input class="color" type="submit" name="bt1" value="Order">


</form>

</div>
            </div>

            

          </div>
        </div>
      </div>
    </div>
  </div>



</body>
</html>