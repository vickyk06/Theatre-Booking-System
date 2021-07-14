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

$user=$_SESSION['cuser']; // if doesnt work use get method


  
 
$sql = "INSERT INTO ticket(cid, pid, tprice, date, stime, hallno, mop) values ('$user', '$pid', '$tprice', '$date', '$stime', '$hno', '$mode')";
if (mysqli_query($conn, $sql)) {
	header("Location: ticket.php");
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	
  
mysqli_close($conn);

?>
