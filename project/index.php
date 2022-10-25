<html>
<head>
<!-- insert style.css file inside index.html  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>

<div id="frm">
<h1> Sign Up </h1>
<form name="f2" action="registeration.php" method="POST">
 <p>
 <label> Username: </label>
 <input type="text" name="user1" required>
 </p>

  <p>
 <label> Password: </label>
 <input type="password" name="pass1" required>
 </p>

 <input type="submit" name="btn" value="Sign Up">
 <p>
 Already a member <a href="login.php"> Click here </a>
 </p>
</form>
</div>

</body>
</html>




