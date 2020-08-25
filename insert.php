<?php
    error_reporting(0);
   
   require'connection.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

   
 
    $query = "INSERT INTO student(name,email,password,mobile,gender,city) VALUES('$name','$email','$password','$mobile','$gender','$city')";   
    $result = mysqli_query($connect,$query);
    
    if($result)
    {
        echo 'Data Inserted';
    }
    
    else
    {
        echo 'Data Not Inserted';
    }
    
   


?>
