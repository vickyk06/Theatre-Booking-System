<?php
$servername = "localhost";
$database = "novox";
$username = "root";
$password = '';

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

session_start();

$cid = $_POST['user'];
$cname = $_POST['cname'];
$age = $_POST['age'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];



$_SESSION['user']=$cid;
  
  
 
$sql = "INSERT INTO customer(cid, cname, age, phoneno, email) values ('$cid', '$cname', '$age', '$phoneno', '$email')";
if (mysqli_query($conn, $sql)) {
	header("Location: bookingt.php");
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	
  
mysqli_close($conn);

?>
