<?php

$Product_name=$_POST['product_name'];
$Quantity=$_POST['Quantity'];
$price=$_POST['pric'];
$Name=$_POST['Name'];
$Phone_number=$_POST['tel'];
$email=$_POST['email'];

$conn= new MySQLi('localhost','root','','profiles');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO order (Product_name,Quantity,price,Name,Phone_number,email)
VALUES ('$Product_name','$Quantity','$price','$Name','$Phone_number','$email')";

if (mysqli_query($conn, $sql)) {
	echo "Added Succesfully<br><br>";
  echo "<a href=viewadmin.php>View records</a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>