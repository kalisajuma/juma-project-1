<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<table>

<center><h1 style= color:red><b><u>Submit your Requirements</u></b></h1>
<p>it is the best way (contact form)to get in touch our team. our team takes responces very seriously.</p>
<p>we will contact you back within the next 15 minuters. it is our average response time.</p>
<p>sometime it may take up to 24 hours</p>
<p>just submit the requirements now.</p>

<div class="container">
  <form action="" method="POST">
    <label for="pname">product name</label>
    <input type="text" id="pname" name="productname" placeholder="Your product..">

    <label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" placeholder="Your quantity..">
	<label for="price">price</label>
    <input type="text" id="price" name="price" placeholder="Your price..">
	<label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">
	
	<label for="phone">Phone number</label>
    <input type="text" id="phone" name="phonenumber" placeholder="Your phone number..">
<label for="mail">E-maul</label>
    <input type="text" id="mail" name="email" placeholder="Your email..">

  <input type="submit" value="Submit">

  </form>

  <?php


include('db_connection.php');

$productname=$_POST['productname'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$Name=$_POST['name'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email']; 
$sql = "INSERT INTO `order`(Product_name,Quantity,price,Name,Phone_number,email)
               VALUES ('$productname','$quantity','$price','$Name','$phonenumber','$email')";

if ($dbcon->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $dbcon->error;
}

$dbcon->close();



?>
 </div>

</body>
</html