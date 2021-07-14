<html>
<head>
<title>
Login form design
</title>

<link rel="stylesheet" type="text/css" href="styleshowsindi.css">

<link rel="stylesheet" href="style11.css">
<body>


<div class="wrapper">
<nav class="navbar">
<a href="mainhome.html"><img class="logo" src="logo.png" href="mainhome.html"></a>
<font color="white" size="20" face="vardanas">NOVOX</font>
<ul>
<li><img src="logo2.png" class="logo2">
<a class="active" href="mainhome.html">HOME</a></li>
<li><img src="logo3.png" class="logo2">
<a href="login.html">USER LOGIN</a></li>
<li><img src="logo3.png" class="logo2">
<a href="logina.html">ADMIN LOGIN</a></li>

<li><img src="logo5.png" class="logo2">
<a href="login.html">BOOKNOW</a></li>

</ul>

</nav>

<div class="hero">
<br><br>
<br><br>
<font color="blue" face="Copperplate">
	<h1 align="center">SHOWTIME DETAILS</h1>
	</font>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "novox";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$pids = $_GET['pid'];
 $sql="SELECT * FROM theatre where pid='".$pids."'";
$result = $conn->query($sql);
  
if ($result->num_rows > 0) {
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		 echo "<br> <section><font color=\"yellow\">";
 echo " <h2>PID:</h2>"."<h2>". $row["pid"]. "</h2>
  <h2>HALL NO:</h2><h2>". $row["hallno"]."</h2>";

 
 

   
   
   echo"
  <h2>SHOW TIME:". $row["stime"] ."</h2><br>
  <h2>HALL TYPE:</h2>"."<h2>". $row["htype"]. "</h2>
  <h2>CAPACITY:</h2>"."<h2>". $row["capacity"]. "</h2>
 
  
  

  
  </font>
</section> ";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
	


</div>


</div> 






</body>





</head>