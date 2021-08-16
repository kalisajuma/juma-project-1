<?php

include('db_connection.php');

$uname=$_POST['uname'];

$psw=$_POST['psw'];
$stmt=$dbcon->prepare("select * from user where email=? AND Password=? ");
	$stmt->bind_param("ss",$uname,$psw);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data=$stmt_result->fetch_assoc();
		
		$sql = "SELECT * FROM register where email='$uname' and Password='$psw'";
$result = $dbcon->query($sql);


$dbcon->close();
echo "<center>";
	echo $uname;	
	
			echo "<center><h1>You Logged In successfully</h1></center>";
	
}
	else{
		echo "<h1>You  are not registerd In the Dream Automobiles ltd System<h2>";
		echo "<h1><a href=register.html>REGISTER NOW</A><h2>";
	}

?>