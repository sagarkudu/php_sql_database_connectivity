<?php
    error_reporting(0);
   
   require'connection.php';
   
   ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CDAC Login form</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/logincss.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
           
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    

    <!-- Login Form -->
  <form action="insert2.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" name="loginsubmit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
        
 </body>
</html>

<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
    
}