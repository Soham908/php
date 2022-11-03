<?php include('..\fetch_name.php'); ?>
<html>
<head>
<title> Minimalist Grocer </title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
    <link rel = "stylesheet" type = "text/css" href = "style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.container {
  position: relative;
}


.cente {
  position: absolute;
  bottom: 8px;
  right: 16px;
  font-size: 18px;
}

img { 
  width: 100%;
  height: auto;
  opacity: 0.3;
}
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
        <a class="nav-link" href="..\homepage.php"> Go to Home <span class="sr-only"></span></a>
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
<a class="nav-link" href="homepage.php"> Wecome <?php echo $name; ?></a>
</li>
<li class="nav-item">
<a class="nav-link" href="..\truncate_cart.php"> Log Out </a>
</li>
    </ul>
  </div>
</nav>


<br><br>

<div class="container">
<div class="center">


<table class="table table-striped table-dark" name="tb1">
  <thead>
    <tr>
      <th scope="col"> </th>
      <th scope="col"> Product Name </th>
      <th scope="col"> Price </th>
      <th scope="col"> Quantity </th>
      <th scope="col"> Total </th>
      <th scope="col"> Change </th>
      <th scope="col"> Action </th>
    </tr>
  </thead>

<?php

include('cart_connection.php');

$total_sum = 0;
$query = "select * from cart_tb;";
$result = mysqli_query($conn,$query);
$result_rows = mysqli_num_rows($result);

if($result_rows > 0)
{
 while($row = mysqli_fetch_assoc($result))
{
  //echo "name ".$row['product_name']." price ".$row['product_price']." quantity ".$row['product_quantity']." "."<br>";
  


?>

  <tbody "text-center">
    <tr>
      <td> </td>
      <td> <?php echo $row['product_name']; ?> </td>
      <td> <?php echo $row['product_price']; ?> </td>
      <td> <?php echo $row['product_quantity']; ?> </td>
      <td> 
<?php echo $row['product_price']*$row['product_quantity']; 

 $total_sum = $total_sum + ( $row['product_price']*$row['product_quantity'] );
?> </td>
      <td> 
<form action="cart_change.php" method="POST"> 

<button name="b1" type="submit" value="1" class="btn btn-info btn-sm">-</button>
<button name="b1" type="submit" value="2" class="btn btn-info btn-sm">+</button>
<input type="hidden" name="h1" value="<?php echo $row['product_name']; ?>">

</form>
      </td>
      <td>
<form action="cart_remove.php" method="POST">   
<button name="r1" type="submit" value="<?php echo $row['product_name']; ?>" class="btn btn-info btn-sm">Remove</button>

</form>
      </td>
    </tr>
    
  
<?php
}
}

?>
<tbody "text-center">
<tr></tr>

    <tr>
<td></td><td>Total Price is</td><td></td><td></td>
<td> <?php echo $total_sum; ?> </td>
<td></td>
<td> 
<form action="cart_empty.php" method="POST">
<button name="e1" type="submit" class="btn btn-info btn-sm"> Empty Cart</button>
</form>
</td>
</tr>
<tr>
<td></td><td></td><td></td><td></td><td></td><td></td>
<td>
<form action="cart_checkout_details.php" method="POST">
<button name="c1" type="submit" class="btn btn-info btn-md"> Checkout </button>
</form>
</td>
</tr>

</tbody>
</table>


</body>
</html>