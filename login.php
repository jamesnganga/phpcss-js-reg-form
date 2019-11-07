<?php

if (isset($_POST["submit"])) {

	$conn = new mysqli("127.0.0.1", "root", "", "dbName");

	if($conn -> connect_error){
		die("Connection to the database failed!!".$conn -> connect_error);
	}else{
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn , $_POST['email']);
		$gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$gender2 = mysqli_real_escape_string($conn, $_POST['gender2']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);

		if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['gender']) || empty($_POST['gender2']) || empty($_POST['phone'])){
			header("Location: ./reg.php?form=empty!");
			exit();
		}elseif (!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[0-9]*$/", $phone)) {
			header("Location: ./reg.php?invalid-character-found");
			exit();
		}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ./reg.php?wrong-email");
			exit();
		}else{
			$sql = "SELECT * FROM tableName WHERE email = '$email' ";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck > 0) {
				header("Location: ./reg.php?registeration=usertaken");
				exit();
			}else{
				//insert the user into the database. 
				$sql = "INSERT INTO tableName (name, email, gender, gender2, phone) VALUES ('$name','$email', '$gender', '$gender2', 'phone');";
				mysqli_query($conn, $sql);
				header("Location: ./reg.php?register=success");
				exit();
			}
		}
	}

}else{
	header("Location: ./reg.php?login=error");
	exit();
}

?>
