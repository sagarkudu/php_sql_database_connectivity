
<?php
include("connection.php");
error_reporting(0);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CDAC Registration form</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
<br>  <hr>

<form action="insert.php" method="POST">
    
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="" class="float-right btn btn-outline-primary mt-1">Log in</a>
	<h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<form>
	<div class="form-row">
		<div class="col form-group">
                    <label>StudentName </label>   
		  	<input type="text" class="form-control" name="name" placeholder="your name">
		</div> <!-- form-group end.// -->
		
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email-Id</label>
		<input type="email" class="form-control" name="email" placeholder="Email address">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
        
        <div class="form-group">
		<label>Password</label>
                <input type="password" class="form-control" name="password" type="password">
	</div> <!-- form-group end.// -->  
    <div class="form-group">
        
        <div class="col form-group">
			<label>Mobile Number</label>
		  	<input type="text" class="form-control" name="mobile" placeholder="Enter your contact no.">
		</div> <!-- form-group end.// -->
               
	       <div class="form-group">
                         <br><label> Gender </label> 
			<label class="form-check form-check-inline">
		  <input type="radio" name="gender" class="form-check-input" type="radio"  >
		  <span class="form-check-label"> Male </span>
		</label>
            
		<label class="form-check form-check-inline">
		  <input type="radio" class="form-check-input" type="radio" name="gender" >
		  <span class="form-check-label"> Female</span>
		</label>
	                
		<div class="form-group col-md-6">
		  <label>City</label>
		  <select id="inputState" name="city" class="form-control">
		    <option> Choose...</option>
		      <option>Nagpur</option>
		      <option>Mumbai</option>
		      <option selected="">Nagpur</option>
		      <option>Pune</option>
		      <option>Bengaluru</option>
		  </select>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->
        
	
        
        <button type="submit" name="insert" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

</form>
    </body>
</html>


<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>


        