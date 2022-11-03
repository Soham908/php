<html>
<head>
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


<style>

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
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
<h3 class="sen" > Welcome to Minimalist Grocer </h3>
<br>
              <h3 class="sen"> Sign Up </h3>


              <p class="sen"> Please set your username and password </p>
<br><br>

<div id="frm">

<form name="f2" action="registeration.php" method="POST" class="sen">
 <p class="sen">
 <label> Username: </label>
 <input class="opa" type="text" name="user1" required>
 </p>

  <p >
 <label> Password: </label>
 <input class="opa" type="password" name="pass1" required>
 </p>
<br>
 <input class="color" type="submit" name="btn" value="Sign Up">

 <p>
<br>	
 Already a member? <a href="login.php" class="sen1"> Click here </a>
 </p>
</form>
</div>

            </div>

            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>