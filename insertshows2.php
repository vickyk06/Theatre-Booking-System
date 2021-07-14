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
$pname = $_POST['pname'];
$genre = $_POST['genre'];
$duration = $_POST['duration'];
$language = $_POST['language'];
$dir = $_POST['dir'];
$actor = $_POST['actor']; 
$actress = $_POST['actress'];
$desc= $_POST['pdesc'];



  	// Get image name
  	$image = $_FILES['image']['name'];


  	// image file directory
  	$target = "".basename($image);

  
 
$sql = "INSERT INTO plays(pid, pname, description, genre, duration, language, dir, actor, actress,image) values ('$pid', '$pname', '$desc', '$genre', '$duration','$language', '$dir', '$actor', '$actress','$image')";
if (mysqli_query($conn, $sql)) {
	header("Location: entersucces.html");
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  
mysqli_close($conn);

?>
