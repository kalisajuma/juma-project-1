<?php


include('db_connection.php');

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$psw=$_POST['psw'];


$sql = "INSERT INTO user (name,email, Phone_number,Password)
VALUES ('$name', '$email', '$phone','$psw')";

if ($dbcon->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $dbcon->error;
}

$dbcon->close();



?>