<html>
<head>
<title>
Login form design
</title>

<link rel="stylesheet" type="text/css" href="stylebookt.css">

<link rel="stylesheet" href="style11.css">
<body>
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
<?php

include('connection.php');

session_start();

//$cid=$_SESSION['user'];
?>
<div class="hero">
<br><br>
<br><br>
<font color="white" face="verdanas">
	<h1 align="center">BOOKING MY PLAY (2/2)</h3>
	<h2 align="center">SHOW DETAILS</h3>
	<h3 align="center">DEAR CUSTOMER,PLEASE CHOOSE THE PLAY DETAILS AND SHOWTIME FOR THE SHOW YOU WOULD LIKE TO PURCHASE</h3>
	</font>

<div class="form-box">



	<font color="orange" face="verdanas">
	<form id="login" class="input-group" action="insertsticket1.php" method="post" >
	PLAYID:<br>
	
	 <select name="pids" form="login">
<?php 

$sql = mysqli_query($con, "SELECT pid FROM plays");
while ($row = $sql->fetch_assoc()){
echo "<option value=". $row['pid'] .">" . $row['pid'] . "</option>";
}
?>
</select>
			<br>	
			
			

			
	DATE:
	<input type="date" class="input-field" name="date" required>  <br><br>	
	SHOW TIME:
	 <select name="stime" form="login">
<?php 

$sql = mysqli_query($con, "SELECT stime FROM theatre");
while ($row = $sql->fetch_assoc()){
echo "<option value=". $row['stime'] .">" . $row['stime'] . "</option>";
}
?>
</select>
<br><br>
	HALL NO:
	<select name="hno" form="login">
<?php 

$sql = mysqli_query($con, "SELECT hallno FROM theatre");
while ($row = $sql->fetch_assoc()){
echo "<option value=". $row['hallno'] .">" . $row['hallno'] . "</option>";
}
?>
</select>
<br><br>

	TICKET PRICE:
	
	<select id="tp" name="price" form="login">
  <option value="300">300</option>
  <option value="200">200</option>
  <option value="500">500</option>
  <option value="1000">1000</option>
   <option value="1500">1500</option>
</select>


	<br><br>
	
	MODE OF PAYMENT:
	<select id="mp" name="mop" form="login">
  <option value="cash">Cash</option>
  <option value="card">Card</option>
  <option value="net banking">Net Banking</option>
  <br><br>
  </select>
  <br><br>
	<button type="submit" class="submit-btn" name="submit" >submit </button>
	</form>
	


</div>


</div> 





</body>





</head>