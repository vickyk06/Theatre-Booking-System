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

$pid = $_POST['pname'];
$customerid = $_POST['cid'];
$rating = $_POST['rat'];
$feedback = $_POST['feed'];
$sql = "INSERT INTO review(pid, cid, rating, feedback) values ('$pid', '$customerid', '$rating', '$feedback')";
if (mysqli_query($conn, $sql)) {
	header("Location: reviewdones.html");
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>