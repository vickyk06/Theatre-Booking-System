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

$pid = $_POST['pids'];
$date = $_POST['date'];
$stime = $_POST['stime'];
$hno = $_POST['hno'];
$tprice = $_POST['price'];
$mode= $_POST['mop'];

//$cid=$_SESSION['user'];

$_SESSION['mop']=$mode;
  
 
$sql = "INSERT INTO ticket(pid, tprice, date, stime, hallno) values ('$pid', '$tprice', '$date', '$stime', '$hno')";
if (mysqli_query($conn, $sql)) {
	header("Location: insertsbooking2.php");
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	
  
mysqli_close($conn);

?>
