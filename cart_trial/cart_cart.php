<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
    <link rel = "stylesheet" type = "text/css" href = "style.css">
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
<body>

<form action="cart_main.php">
<button type="submit" class ="btn btn-primary btn-lg"> click to go back 
</button>
</form>


<div class="container">
<div class="center">


<table class="table table-striped table-dark" name="tb1">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">Change</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

<?php

include('cart_connection.php');

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
      <th scope="row">1</th>
      <td> <?php echo $row['product_name']; ?> </td>
      <td> <?php echo $row['product_price']; ?> </td>
      <td> <?php echo $row['product_quantity']; ?> </td>
      <td> <?php echo $row['product_price']*$row['product_quantity']; ?> </td>
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

</tbody>
</table>

</body>
</html>