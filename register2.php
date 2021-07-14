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

$username = $_POST['causer'];
$password = $_POST['capass'];
$sql = "INSERT INTO adminlogin(ausername, apassword) values ('$username', '$password')";
if (mysqli_query($conn, $sql)) {
	header("Location: loginr.html");
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>