<?php
    $fullName = $_POST['fullName'];
    $occupation = $_POST['occupation'];
    $phoneNumber = $_POST['phoneNumber'];
    $emailAddress = $_POST['emailAddress'];
    $address = $_POST['address'];
    $blood_grooup_type = $_POST['blood_grooup_type'];
    $last_dontation = $_POST['last_dontation'];

    // Database Connection
    $conn = new mysqli('localhost','root','','blood_donation');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into blood_don_form(fullName, occupation, phoneNumber, emailAddress, address, blood_grooup_type, last_dontation) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssissss", $fullName, $occupation, $phoneNumber, $emailAddress, $address, $blood_grooup_type, $last_dontation);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration Successfully...";
		$stmt->close();
		$conn->close();
	}
?>