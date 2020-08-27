<?php
	$yourname = $_POST['yourname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	

	//database connection
	$conn = new mysqli('127.0.0.1','root','','test12');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(name, phone,email,message)values(?,?,?,?)");
		$stmt->bind_param("siss",$name,$phone,$email,$message);
		$stmt->execute();
		echo "Successfully... message";
		$stmt->close();
		$conn->close();
	}


?>
