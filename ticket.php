<html>
<head>
<title>
Login form design
</title>

<link rel="stylesheet" type="text/css" href="ticket.css">

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
<font color="Red" face="Copperplate">
	<h1 align="center">TICKET DETAILS</h1>
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


//$tid = $_GET['tid'];// if session doesnt work  

 $sql="SELECT * FROM  ticket ORDER BY  tid DESC LIMIT 1";                               //"SELECT * FROM theatre where tid='".$tid."'";
$result = $conn->query($sql);
  
if ($result->num_rows > 0) {
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
	//	 $s=$row['image'];
        echo "<br> <section><font color=\"green\">";
	//	echo '<h2><img src="'.$s.'"  style="width:400px;height:600px"></h2>';
 echo "
<h3>TICKET ID:</h3>"."<h3>NOVOPL". $row["pid"]. $row["tid"]."</h3>
 <h3>PID:</h3>"."<h3>". $row["pid"]. "</h3>
  <h3>CUSTOMER USER NAME:</h3><h3>". $row["cid"]."</h3>";

 
 

   
   
   echo"
 
  <h3>DATE:</h3>"."<h3>". $row["date"]. "</h3>
  <h3>SHOW TIMING</h3>"."<h3>". $row["stime"]. "</h3>
  <h3>HALL NUMBER:</h3><h3>". $row["hallno"]."</h3>
  <h3>TICKET PRICE:</h3>"."<h3>". $row["tprice"]. "</h3>
  <h3>MODE OF PAYMENT:</h3><h3>". $row["mop"]."</h3>

  
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