<?php
    error_reporting(0);
   include("connection.php");
   require'connection.php';
    
    $email = $_POST['email'];
    $password=$_POST['password'];
 
   
    $select = "select * from student where id='$email' ";
    $select = "select * from student where id='$password' ";
    
    $result = mysqli_query($connect,$select);
     $data= mysqli_fetch_all($email,$password);
    
    if($email==$data['email'] && $email==$data['password'] )
    {
        header('location:welcome.php');
    }
    
    else
    {
        echo 'Data Not Inserted';
    }
    


?>
