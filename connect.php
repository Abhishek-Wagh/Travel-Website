<?php
	$fullName = $_POST['fullName'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost','root','','contact');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contactus(FullName,Email,Phone,message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis", $fullName, $email, $phone, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo '<script>alert("Thank You for reaching out to us.Our Team will get back to you shoortly")</script>';
		$stmt->close();
		$conn->close();
	}
