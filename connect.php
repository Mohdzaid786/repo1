<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "lko";

	//create connection..

	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

	if(mysqli_connect_error()){
		//die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
      echo "conn fail";
	}else{
		$SELECT = " SELECT email FROM login where email = ? Limit 1 ";
		$INSERT = "INSERT Into xyz (name, email, message) values(?,?,?)";
		//prepare statement
		
		
			
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sss", $name, $email, $message);
			$stmt->execute();
			
			//echo "<a href='login.php'></a>";//
			header("Location:http://localhost/lko/index.html");
			echo "New record inserted sucessfully";
            $stmt->close();
			$conn->close();
			
		
		}
	





?>