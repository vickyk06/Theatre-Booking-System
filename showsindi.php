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
<a href="home.html"><img class="logo" src="logo.png" href="home.html"></a>
<font color="white" size="20" face="vardanas">NOVOX</font>
<ul>
<li><img src="logo2.png" class="logo2">
<a class="active" href="home.html">HOME</a></li>
<li><img src="logo3.png" class="logo2">
<a href="login.html">USER LOGIN</a></li>
<li><img src="logo3.png" class="logo2">
<a href="logina.html">ADMIN LOGIN</a></li>
<li><img src="logo4.png" class="logo2">
<a href="reviews.php">REVIEW</a></li>
<li><img src="logo5.png" class="logo2">
<a href="bookingc.html">BOOKNOW</a></li>

</ul>

</nav>

<div class="hero">
<br><br>
<br><br>
<font color="blue" face="Copperplate">
	<h1 align="center">SHOW DETAILS</h1>
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
 $sql="SELECT * FROM plays where pid='".$pids."'";
$result = $conn->query($sql);
  
if ($result->num_rows > 0) {
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		 $s=$row['image'];
        echo "<br> <section><font color=\"white\">";
		echo '<h2><img src="'.$s.'"  style="width:400px;height:600px"></h2>';
 echo " <h2>PID:</h2>"."<h2>". $row["pid"]. "</h2>
  <h2>PLAY NAME:</h2><h2>". $row["pname"]."</h2><br>";

 
 

   
   
   echo"
   <h1>AVG. RATING:</h1>"."<h1>". $row["rating"]. "</h1><br>
  <p>DESCRIPTION:". $row["description"] ."<br>
  <h2>LANGUAGE:</h2>"."<h2>". $row["language"]. "</h2><br>
  <h2>DURATION:</h2>"."<h2>". $row["duration"]. "</h2><br>
  <h2>GENRE:</h2><h2>". $row["genre"]."</h2><br>
  <h2>DIRECTOR:</h2>"."<h2>". $row["dir"]. "</h2><br>
  <h2>LEAD ACTOR:</h2><h2>". $row["actor"]."</h2><br>
  <h2>LEAD ACTRESS:</h2>"."<h2>". $row["actress"]. "</h2><br>
  <h2>TSOLD:</h2><h2>". $row["tsold"]."</h2><br>
  
  <h2>SEE SHOWTIMES</h2>
   <a href='showsindithea.php?pid=" . $row["pid"] . "'><h2>CHECK</h2>

  
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