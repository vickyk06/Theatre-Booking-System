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

$username = $_POST['cuser'];
$password = $_POST['cpass'];
$sql = "INSERT INTO userlogin(username, password) values ('$username', '$password')";
if (mysqli_query($conn, $sql)) {
	header("Location: loginr.html");
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>