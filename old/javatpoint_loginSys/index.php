<html>  
<head>  
    <title>PHP login system</title>  
    <!-- insert style.css file inside index.html  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>  
<body>

    <div class="col-md-6" id = "frm">  
        <h1>Sign Up</h1>  
        <form name="f1" action = "registeration1.php"  method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="username" name  = "username" required/>  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" required/>  
            </p>  
            <p>     
                <input type =  "submit" value = "Sign Up" />  
            </p>
	    <p> 
		Already a member <a href="log.php">Click here!</a>
	    </p>
	    
        </form>  
    </div>

 


</body>     
</html>