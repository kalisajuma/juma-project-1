<?php



$dbcon=mysqli_connect("127.0.0.1","root","");

mysqli_select_db($dbcon,"juma project 1");

if ($dbcon->connect_error) {
    die("Connection failed: " . $dbcon->connect_error);
  } 
  

  ?>

