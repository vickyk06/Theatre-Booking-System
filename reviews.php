<html>
<head>
<title>
Login form design
</title>

<link rel="stylesheet" type="text/css" href="style3.css">

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
<font color="yellow" face="verdanas">
	<h1 align="center">PLEASE TAKE YOUR TIME TO REVIEW AND RATE OUR PLAYS YOU WATCHED</h1>
	</font>
	<?php

include('connection.php');



//$cid=$_SESSION['user'];
?>
<div class="form-box">

	<font color="orange" face="verdanas">
	<form id="login" class="input-group" action="review.php" method="post">
	PLAY ID:
	
	<select name="pname" form="login">
	<?php 

$sql = mysqli_query($con, "SELECT pid FROM plays");
while ($row = $sql->fetch_assoc()){
echo "<option value=". $row['pid'] .">" . $row['pid'] . "</option>";
}
?>
</select>
			<br>	
			<br>
	USER ID:
	<input type="text" class="input-field" name="cid" required>

			<br>	
	<br>
	RATING(0-10):
  

	<select id="tp" name="rat" form="login">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
   <option value="4">4</option>
   <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
   <option value="9">9</option>
   <option value="10">10</option>
   
</select>


	<br><br>	
	FeedBack:
	<input type="text" class="input-field" name="feed" required>
	</font>
	
	<br><br>
	<button type="submit" class="submit-btn" onclick="myFunction()">submit </button>
	</form>
	


</div>


</div> 


<script>
function myFunction() {
  alert("THANK YOU FOR YOUR RATING.HOPE YOU ENJOYED THE SHOW");
}
</script>
<script>

var x= document.getElementById("login");
var y= document.getElementById("register");
var z= document.getElementById("btn");

function register(){

	x.style.left = "-400px";
	y.style.left = "50px";
	z.style.left = "110px";
	}
	
	
function login(){

	x.style.left = "50px";
	y.style.left = "450px";
	z.style.left = "0px";
	}  


</script>
</body>





</head>