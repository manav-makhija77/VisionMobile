<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$query = filter_input(INPUT_POST, 'query');





		// Variable Part
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "vision";
	
		// Create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

		// Check Connection
		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '
			. mysqli_connect_error());
		}
		else{
			$sql = "INSERT INTO vision values ('$name','$email','$phone','$query')";
			if ($conn->query($sql)){
				echo "New record is inserted sucessfully";
			}
			else{
				echo "Error: ". $sql ."
				". $conn->error;
			}
			$conn->close();
		}
	

?>