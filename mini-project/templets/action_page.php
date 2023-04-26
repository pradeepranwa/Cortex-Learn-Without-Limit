<?php
	$Username = $_POST['uname'];
	

	$Password = $_POST['psw'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','cortex2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Username, Passwords) values(?, ?)");
		$stmt->bind_param("ss", $uname,$psw);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
