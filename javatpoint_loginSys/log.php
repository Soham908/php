
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">   
<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
     
    <div class="col-md-6" id = "frm">  
        <h1>Log In</h1>  
        <form name="f1" action = "authentication.php" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" required/>  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" required/>  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>
	    <p> 
		Dont have a account <a href="index.php">Click here!</a>
	    </p>
	    
    </div>  
</body>
</html>
