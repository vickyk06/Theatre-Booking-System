<html>
<head>
<title>
Login form design
</title>

<link rel="stylesheet" type="text/css" href="styleshows.css">

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
	<h1 align="center">CURRENTLY RUNNING PLAYS</h1>
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

$sql = "SELECT pid, pname, image FROM plays";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		
		 $s=$row['image'];
        echo "<br> <section><font color=\"white\"><br>";
		 echo '<br><span><h2><a href="showsindimain.php?pid=' . $row['pid'] . '"><img src="'.$s.'"  style="width:150px;height:210px"></a></h2></span>';
echo"  <br><h2>PID:</h2>"."<h2>". $row["pid"]. "</h2>
  <h2>PLAY NAME:</h2><h2>". $row["pname"]."</h2><br>";
 // <p>DESCRIPTION:". $row["description"] ."<br>";
 // echo '<h2><a href="showsindi.php?pid=' . $row['pid'] . '"><img src="'.$s.'"  style="width:120px;height:160px"></a></h2>';

  echo"
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