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

$pid = $_POST['pids'];
$hno = $_POST['hno'];
$stime = $_POST['stime'];
$htype = $_POST['htype'];
$capacity = $_POST['cap'];




  
 
$sql = "INSERT INTO theatre(pid, hallno, htype, stime, capacity) values ('$pid', '$hno', '$htype', '$stime', '$capacity')";
if (mysqli_query($conn, $sql)) {
	header("Location: entersucces.html");
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	
  
mysqli_close($conn);

?>
