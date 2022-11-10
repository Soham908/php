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
<a class="nav-link" href="homepage.php"> Wecome <?php echo $name; ?></a>
</li>
    </ul>

    </ul>
  </div>
</nav>




<br><br>
<h2> Contact Us page </h2>
<p><h5> Our contact number: 911 </h5></p>
<p><h5> Please do not contact us </h5></p>






</body>
</html>