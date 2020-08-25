<?php


    // details  here
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "cdac";
    
    // get values form input text and number
    
$connect = mysqli_connect($hostname, $username, $password, $databaseName);

if($connect)
    {
        echo 'Data connected';
    }
    
    else
    {
        echo 'Data Not Inserted';
    }

   
  ?>