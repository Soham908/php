<html>
<head>
<title> LOGIN </title>
<!-- insert style.css file inside index.html  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>

<div id="frm">
<h1>Log In </h1>
<form name="f1" action = "authentication.php" method = "POST">
 <p>
 <label> Username: </label>
 <input type="text" name="user" required>
 </p>

 <p>
 <label> Password: </label>
 <input type="password" name="pass" required>
 </p>

 <input type="submit" name="bt1" value="Login"> 
 <p>
 Dont have an account <a href="index.php"> Click Here </a>
 </p>
</form>
</div>

</body>
</html>



